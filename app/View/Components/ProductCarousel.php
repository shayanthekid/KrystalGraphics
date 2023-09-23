<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCarousel extends Component
{
    public $title;
    public $products;

    public function __construct($title, $products)
    {
        $this->title = $title;
        $this->products = $products;
    }

    public function render()
    {
        return view('components.product-carousel');
    }
}