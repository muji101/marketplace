<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;

class WishlistController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', 1)->get();
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->get();
        
        return view('pages.front.wishlist', [
            'products' => $products,
            'wishlists' => $wishlists
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'product_id' => 'unique:wishlists,product_id'
        ]);
        
        Wishlist::create($data);

        return redirect()->route('wishlist');
    }

    public function storeCart(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
            'product_id' => 'unique:wishlists,product_id'
        ]);
        
        Wishlist::create($data);
        $cart = Cart::find($id);
        $cart->delete();

        return redirect()->route('wishlist');
    }

    public function destroy($id)
    {
        $data = Wishlist::find($id);
        $data->delete();

        return back();
    }
}