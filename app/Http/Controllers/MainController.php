<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index()
    {
        $products = Product:: get();
        return view('index', compact('products'));
    }

    public function categories()
    {
        $categories = Category:: get();
        return view('categories', compact('categories'));
    }

    public function product($category, $product = null)
    {

        return view('product', compact('product'));
    }

    public function category($code)
    {
        $category = Category:: where('code', $code)->first();
        return view('category', compact('category'));
    }
}
