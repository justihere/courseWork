<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function HandmadeForYou()
    {
        return view('HandmadeForYou');
    }

    public function vyshyvka($id)
    {
        $products = Product::where('category_id', $id)->get();
        return view('vyshyvka', ['products' => $products]);
    }

}
