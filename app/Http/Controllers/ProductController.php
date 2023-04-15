<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('pages.shop')->with('products', $products);
    }

    // public function show($slug)
    // {
    //     $product = Product::where('slug', $slug)->firstOrFail();

    //     return view('products.show')->with('product', $product);
    // }


    // public function addProduct(Request $request)
    // {
       
    //     // ddd($request->input());
    //     Product::add(
    //         [
    //             'id' => $request->input()['id'],
    //             'title' => $request->input()['title'],
    //             'slug' => $request->input()['slug'],
    //             'price' => $request->input()['price'],
    //             'availability' => $request->input()['availability'],
    //             'subtitle' => $request->input()['subtitle'],
    //             'description' => $request->input()['description'],
    //             'image' => $request->input()['image'],
    //             'weight' => $request->input()['weight'],
    //             'dimensions' => $request->input()['dimensions'],
    //             'materials' => $request->input()['materials'],
                
    //         ]
    //     );
    //     foreach (Product::content() as $item) {
    //         // Product::update($item->rowId, 1);
    //     }
    //     return back()->with('notif', "Sucessfully Added product");
    // }
}
