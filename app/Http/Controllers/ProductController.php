<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showCategory($category)
    {
        // validasi
        $allowedCategory = [
            'food-beverage',
            'beauty-health',
            'home-care',
            'baby-kid'
        ];


        if (!in_array($category, $allowedCategory)) {
            abort(404);
        }

        $product = [
            'product 1',
            'product 2',
            'product 3',
            'product 4'
        ];
        return view('products')
            ->with('category', $category)
            ->with('products', $product);
    }
}

