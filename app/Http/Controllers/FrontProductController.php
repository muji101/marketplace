<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Store;
use App\Models\Category;

class FrontProductController extends Controller
{
    public function detail($id)
    {
        $products = Product::findOrFail($id);
        $stores = Store::where('user_id', $products->user_id)->get();
        $promos = Promotion::where('type', 'topads')->get()->random();
        $categoryall = Category::get();

        return view('pages.front.product', [
            'products' => $products,
            'stores' => $stores,
            'promos' => $promos,
            'categoryall' => $categoryall,
        ]);
    }
}
