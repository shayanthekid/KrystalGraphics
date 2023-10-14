<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductCarousel extends Component
{
    public $title;
    public $products;
    public $columns; // Add this property for columns


    public function __construct($title, $products, $columns=1)
    {
        $this->title = $title;
        $this->products = $products;
            $this->columns = $columns; // Set the columns property

    }

    public function render()
    {
        return view('components.product-carousel');
    }
}