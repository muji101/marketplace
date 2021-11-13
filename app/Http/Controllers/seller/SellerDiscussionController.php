<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class SellerDiscussionController extends Controller
{
    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->get();

        return view('pages.seller.discussion', [
            'products' => $products
        ]);
    }
}
