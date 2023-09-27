<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BannerController;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
    {
        $banners = Banner::all();

        return view('admin', compact('banners'));
    }

}
