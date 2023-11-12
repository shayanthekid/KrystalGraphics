<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use Log;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
public function addProduct(Request $request)
{
    try {
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:855',
        'subcategory_id' => 'required|exists:subcategories,id',
        'files.*' => 'file', // Validate both images and videos
        'cover_image' => 'file|image', // Validation for cover image
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
            'coversrc' => '',
        ];
    }

  if ($request->hasFile('cover_image')) {
    $coverPath = $request->file('cover_image')->store('public/products/cover');
    $media[] = [
        'product_id' => $product->id,
        'filename' => $coverPath,
        'type' => 'image',
        'coversrc' => $coverPath,
    ];
}

    ProductImage::insert($media);
      return response()->json(['message' => 'Product added successfully']);

   } catch (\Illuminate\Database\QueryException $e) {
        Log::error('Database error in addProduct: ' . $e->getMessage());
        return response()->json(['error' => 'Database error: ' . $e->getMessage()], 500);
    } catch (\Illuminate\Validation\ValidationException $e) {
        Log::error('Validation error in addProduct: ' . json_encode($e->errors()));
        return response()->json(['error' => 'Validation error: ' . $e->errors()], 422);
    } catch (\Exception $e) {
        Log::error('Server error in addProduct: ' . $e->getMessage());
        return response()->json(['error' => 'Server error: ' . $e->getMessage()], 500);
    }
}

public function getAllProducts()
{
       $products = Product::with('subcategory')->get();
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
    $product = Product::with('images', 'subcategory')->find($productId);

    if (!$product) {
        // You can handle the case where the product is not found, for example, return a 404 error.
        return response()->json(['message' => 'Product not found'], 404);
    }

    // Return a view with the product data
    return view('components.product', ['product' => $product]);
}



public function deleteProduct($productId)
{
    // Log a message when entering the function for debugging purposes
    Log::debug("Entering deleteProduct for Product ID: $productId");

    $product = Product::find($productId);

    if (!$product) {
        // Log a message for product not found
        Log::debug("Product not found for ID: $productId");
        return response()->json(['error' => 'Product not found'], 404);
    }

    // Delete associated media files from storage
    foreach ($product->images as $image) {
        if (Storage::exists($image->filename)) {
            // Log a message before deleting the image
            Log::debug("Deleting image: $image->filename");
            if (Storage::delete($image->filename)) {
                // Log a message for successful image deletion
                Log::info("Image deleted: $image->filename");
            } else {
                // Log an error message if image deletion fails
                Log::error("Failed to delete image: $image->filename");
            }
        }
    }

    // Attempt to delete the product
    if ($product->delete()) {
        // Log a message for successful deletion
        Log::info("Product deleted successfully for Product ID: $productId");
        return response()->json(['message' => 'Product and associated media files deleted successfully']);
    } else {
        // Log an error message if product deletion fails
        Log::error("Failed to delete product for Product ID: $productId");
        return response()->json(['error' => 'Failed to delete product'], 500);
    }
}

//update functions

public function updateProduct(Request $request, $productId)
{
    $product = Product::find($productId);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    $this->validate($request, [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:855',
    ]);

    $product->title = $request->name;
    $product->description = $request->description;
    $product->save();

    return response()->json(['message' => 'Product updated successfully']);
}

public function deleteImage($imageId) {
    $image = ProductImage::find($imageId);

    if (!$image) {
        return response()->json(['success' => false, 'message' => 'Image not found'], 404);
    }

    // Delete the image file from storage
    if (Storage::exists($image->filename) && Storage::delete($image->filename)) {
        $image->delete(); // Delete the record from the database
        return response()->json(['success' => true, 'message' => 'Image deleted successfully']);
    }

    return response()->json(['success' => false, 'message' => 'Failed to delete image']);
}

public function deleteVideo($videoId) {
    // The logic would be similar to deleteImage, just tailored for videos.
    $video = ProductImage::find($videoId);

    if (!$video) {
        return response()->json(['success' => false, 'message' => 'Video not found'], 404);
    }

    // Delete the video file from storage
    if (Storage::exists($video->filename) && Storage::delete($video->filename)) {
        $video->delete(); // Delete the record from the database
        return response()->json(['success' => true, 'message' => 'Video deleted successfully']);
    }

    return response()->json(['success' => false, 'message' => 'Failed to delete video']);
}

public function addImagesToProduct(Request $request, $productId) {
    try {
        $product = Product::find($productId);

        if (!$product) {
            Log::error('Product not found with ID: ' . $productId);
            return response()->json(['message' => 'Product not found'], 404);
        }

        $this->validate($request, [
            'files.*' => 'file', // Validate both images and videos
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

        return response()->json(['message' => 'Images/Video added successfully']);
    } catch (\Exception $e) {
        Log::error('Error adding images/videos to product: ' . $e->getMessage());
        return response()->json(['message' => 'Failed to add images/video'], 500);
    }
}
public function getEquipmentProducts()
{
    // Assuming '7' is the ID for the 'equipment' subcategory
    $equipmentSubcategoryId = 7;
    $equipmentProducts = Product::with('images')
                                ->where('subcategory_id', $equipmentSubcategoryId)
                                ->get();

    return response()->json($equipmentProducts);
}

public function getPortfolio()
{
    // Assuming '7' is the ID for the 'equipment' subcategory
    $portfolioSubcategoryId = 8;
    $Portfolio = Product::with('images')
                                ->where('subcategory_id', $portfolioSubcategoryId)
                                ->get();

    return response()->json($Portfolio);
}

}

