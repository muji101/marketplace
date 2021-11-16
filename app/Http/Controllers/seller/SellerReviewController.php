<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ReplyReview;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
use Illuminate\Http\Request;

class SellerReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::whereHas('product', function($q){
            $q->where('user_id', Auth::user()->id);
        })->get();

        $products = Product::where('user_id', Auth::user()->id)->get();
        
        return view('pages.seller.reviews', [
            'products' => $products,
            'reviews' => $reviews
        ]);
    }

    public function replyStore(Request $request)
    {
        $data = $request->all();

        ReplyReview::create($data);

        return back();
    }
}
