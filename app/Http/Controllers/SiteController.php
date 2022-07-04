<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();
        return view('site.index', compact('categories'));
    }

    public function shop()
    {
        return view('site.shop');
    }

    public function add_to_cart(Request $request)
    {
//        dd($request->all());
        $product = Product::where('id', $request->get('id'))->first();
//dd($product);
        $cart = Session::get('cart', []);
        if (isset($cart[$request->get('id')])) {
            $cart['quantity']++;
        } else {
            $cart[$request->get('id')] = [
                'id'=>$request->get('id'),
                'quantity' => 1,
                'price' => $product->price,
                'title' => $product->translate('title'),
                'description' => $product->translate('description'),
            ];
        }
        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
}
