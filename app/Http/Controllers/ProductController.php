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
        'files.*' => 'file', // Validate both images and videos
    ]);

    $product = Product::create([
        'title' => $request->name,
        'description' => $request->description,
        'subcategory_id' => $request->subcategory_id,
    ]);

    $media = [];

    foreach ($request->file('files') as $file) {
        $type = strpos($file->getMimeType(), 'video') === 0 ? 'video' : 'image';
        $path = $file->store('public/products/' . $type);

        $media[] = [
            'product_id' => $product->id,
            'filename' => $path,
            'type' => $type, // Set the file type ('image' or 'video')
        ];
    }

    ProductImage::insert($media);

    return response()->json(['message' => 'Product added successfully']);
}

public function getAllProducts()
{
    $products = Product::all();
    return response()->json($products);
}

public function getAllProductsWithImages()
{
    // Get all products with their associated images
    $products = Product::with('images')->get();

    return view('adminprod', ['products' => $products]);
}

public function getProductsBySubcategory($subcategoryId)
{
   $products = Product::with('images')->where('subcategory_id', $subcategoryId)->get();

    return response()->json($products);
}

public function getProduct($productId)
{
    // Retrieve the product by its ID
    $product = Product::with('images')->find($productId);

    if (!$product) {
        // You can handle the case where the product is not found, for example, return a 404 error.
        return response()->json(['message' => 'Product not found'], 404);
    }

    // Return a view with the product data
    return view('components.product', ['product' => $product]);
}

public function updateProduct(Request $request, $productId)
{
    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    $this->validate($request, [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:855',
        'subcategory_id' => 'required|exists:subcategories,id',
    ]);

    $product->title = $request->name;
    $product->description = $request->description;
    $product->subcategory_id = $request->subcategory_id;
    $product->save();

    return response()->json(['message' => 'Product updated successfully']);
}

public function deleteProduct($productId)
{
    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    // Delete associated media files from storage
    foreach ($product->images as $image) {
        if (Storage::exists($image->filename)) {
            Storage::delete($image->filename);
        }
    }

    // Delete the product
    $product->delete();

    return response()->json(['message' => 'Product and associated media files deleted successfully']);
}

}

