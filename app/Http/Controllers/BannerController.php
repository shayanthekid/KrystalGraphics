<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{


public function index()
{
    $banners = Banner::all();
    return view('admin', compact('banners'));
}


   public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust image validation rules as needed
        ]);

        // Store the uploaded image
      $imagePath = 'storage/banners/' . $request->file('image')->hashName();
$request->file('image')->store('public/banners'); // This stores the file in the public disk under the "banners" directory

Banner::create([
    'title' => $request->input('title'),
    'image_path' => $imagePath,
]);

        // Redirect back with a success message or handle the response as needed
        return redirect()->back()->with('success', 'Banner created successfully');
    }



public function destroy($id)
{
    try {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return response()->json(['message' => 'Banner deleted successfully']);
    } catch (\Exception $e) {
        // Log the error for debugging purposes
        \Log::error('Error deleting banner: ' . $e->getMessage());

        // Return an error response
        return response()->json(['error' => 'Failed to delete banner'], 500);
    }
}

}
