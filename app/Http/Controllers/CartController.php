<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', 1)->get();
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        
        return view('pages.front.cart', [
            'carts' => $carts,
            'products' => $products,
        ]);
    }

    public function note(Request $request, $id)
    {
        Cart::where('id', $id)->update(array('note' => $request->note));
        
        return back();
    }

    public function add(Request $request, $id)
    {
        $data = [
            'product_id' => $id,
            'user_id' => Auth::user()->id,
        ];

        Cart::create($data);
        return redirect()->route('cart');
    }

    public function delete(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->route('cart');
    }

    public function success()
    {
        return view('pages.success');
    }
    

}
