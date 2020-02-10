<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $order=Order::all();
        $dollar_total = 0;
        $euro_total = 0;
        $delivery_dollar = 9;
        $delivery_euro = 8;

        foreach ($order as $item) {
            $dollar_total += $item->products->price_dollar * $item->count + $delivery_dollar;
            $euro_total += $item->products->price_euro * $item->count + $delivery_euro;
        }

        return view('pages.basket', [
            'orders'=>$order,
            'dollar_total' => $dollar_total,
            'euro_total' => $euro_total,
            'delivery_dollar'=> $delivery_dollar,
            'delivery_euro'=> $delivery_euro,
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addProduct($id)
    {
        $order = Order::query()
            ->where('product_id', '=', $id)
            ->where('session_id', '=', session()->getId())
            ->first();

        if($order) {
            $order->count = $order->count + 1;
            $order->save();
        } else {
            $order= new Order([
                'product_id'=>$id,
                'session_id'=>session()->getId(),
                'count'=>1,
            ]);
            $order->save();
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        $order = DB::table('orders')->where('id',$id)->delete();
        return redirect()->back();
    }

}
