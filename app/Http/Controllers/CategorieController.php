<?php

namespace App\Http\Controllers;

use App\Models\CategorieProduct;
use Illuminate\Http\Request;
use App\Models\Product;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = CategorieProduct::all();
        $products = Product::all();

        return view('pages.shopCategories', [
            'categories' => $categories,
            'products' => $products
        ]);
            }
}
