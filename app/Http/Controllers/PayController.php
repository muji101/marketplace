<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayController extends Controller
{
    public function index($id)
    {
        $product = Product::findOrFail($id);
        $address = Address::where('user_id', Auth::user()->id)->where('status', 1)->get();
        
        return view('pages.front.buy-direct', [
            'product' => $product,
            'address' => $address,
        ]);
    }
}
