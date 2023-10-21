<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
   public function addProduct(Request $request)
{
    
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:855',
        'subcategory_id' => 'required|exists:subcategories,id',
    ]);

    $product = Product::create([
        'title' => $request->name,
        'description' => $request->description,
            'subcategory_id' => $request->subcategory_id, // Include subcategory_id in the product creation
    ]);

    $images = [];

   foreach ($request->file('images') as $imagefile) {
    $path = $imagefile->store('public/products'); // Store the images directly in 'public/products' folder
    $images[] = ['product_id' => $product->id, 'filename' => $path];
}

    ProductImage::insert($images);
        return response()->json(['message' => 'Product added successfully']);

}


}

