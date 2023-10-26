<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BannerController;
use App\Models\Banner;
use Illuminate\Http\Request;
use App\Models\Product; // Import the Product model

class AdminController extends Controller
{
  public function index()
    {
        $banners = Banner::all();

        return view('admin', compact('banners'));
    }

    public function getallproducts()
    {
      
        $products = Product::with('images')->get(); // Get all products with their associated images

        return view('adminprod', compact('products'));
    }

}
