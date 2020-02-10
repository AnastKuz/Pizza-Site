<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        $product=Product::all();
        return view('pages.index', ['products'=>$product, 'orders' => $orders]);
    }
}
