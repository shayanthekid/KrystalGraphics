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

}
