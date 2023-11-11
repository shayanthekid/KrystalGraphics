<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Subcategory;
use App\Models\ProductImage;
use Log;
use Illuminate\Support\Facades\Storage;

class SubcategoryController extends Controller
{
   public function getAllSubcategories()
{
    $subcategories = Subcategory::all();

    // Slice the collection to exclude the last two items
    $slicedSubcategories = $subcategories->slice(0, -2);

    $subcategoriesWithUrls = $slicedSubcategories->map(function ($subcategory) {
        return [
            'id' => $subcategory->id,
            'name' => $subcategory->name,
            'imgsrc' => $subcategory->imgsrc,
        ];
    });

    return response()->json($subcategoriesWithUrls);
}



public function uploadBrochure(Request $request)
{
    $request->validate([
        'subcategory_id' => 'required|exists:subcategories,id',
        'brochure' => 'required|file|mimes:pdf'
    ]);

    $subcategory = Subcategory::find($request->subcategory_id);
    if ($request->hasFile('brochure')) {
        $path = $request->file('brochure')->store('public/subcategories');
        $subcategory->imgsrc = Storage::url($path);
        $subcategory->save();
    }

    return back()->with('success', 'Brochure uploaded successfully.');
}


public function deleteSubcategory($subcategoryId)
{
// Log a message when entering the function for debugging purposes
    Log::debug("Entering deleteSubcategory for Subcategory ID: $subcategoryId");

    $subcategory = Subcategory::find($subcategoryId);

    if (!$subcategory) {
        // Log a message for subcategory not found
        Log::debug("Subcategory not found for ID: $subcategoryId");
        return response()->json(['error' => 'Subcategory not found'], 404);
    }

    // Check and delete the associated image file from storage
    if ($subcategory->imgsrc && Storage::exists($subcategory->imgsrc)) {
        // Log a message before deleting the image
        Log::debug("Deleting image: $subcategory->imgsrc");
        if (Storage::delete($subcategory->imgsrc)) {
            // Log a message for successful image deletion
            Log::info("Image deleted: $subcategory->imgsrc");
        } else {
            // Log an error message if image deletion fails
            Log::error("Failed to delete image: $subcategory->imgsrc");
            return response()->json(['error' => 'Failed to delete image'], 500);
        }
    }

    // Set the imgsrc to null and save the subcategory
    $subcategory->imgsrc = '';
    if ($subcategory->save()) {
        // Log a message for successful update
        Log::info("Image source cleared for Subcategory ID: $subcategoryId");
        return response()->json(['message' => 'Image source cleared and storage deleted successfully']);
    } else {
        // Log an error message if the update fails
        Log::error("Failed to clear image source for Subcategory ID: $subcategoryId");
        return response()->json(['error' => 'Failed to clear image source'], 500);
    }
}


}
