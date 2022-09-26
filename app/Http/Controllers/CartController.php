<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $cart = session('cart');

        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quanity']++;
        } else {
            $cart[$request->product_id] = ['quanity' => 1];
        }

        session(['cart' => $cart, 'quanity' => count($cart)]);

        return redirect()->back();
    }

    public function deleteProduct(Request $request)
    {
        $cart = session('cart');

        unset($cart[$request->product_id]);
        session(['cart' => $cart, 'quanity' => count($cart)]);

        return redirect()->back();
    }

    public function show()
    {
        $cart = session('cart');

        $productIds = $cart ? array_keys($cart) : [];
        $products = Product::whereIn('id', $productIds)->get();

        $categories = Category::limit(10)->get();

        //session()->flush();
        return view('cart', compact('categories', 'products', 'cart'));
    }
}
