<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function index()
    {
        $promoslider = Promotion::where('type', 'slider')->limit(5)->get();
        $categories = Category::limit(8)->get();
        $subcategories = SubCategory::limit(8)->get();
        $productall = Product::where('is_active', 1)->get();
        $products = Product::where('is_active', 1)->limit(6)->get();
        $productoff = Product::where('is_active', 1)->get()->random(5);
        $promospecial = Promotion::where('type', 'special')->limit(3)->get();
        $promoofficial = Promotion::where('type', 'officialads')->limit(1)->get();

        return view('pages.front.index', [
            'categories' => $categories,
            'productall' => $productall,
            'subcategories' => $subcategories,
            'promoslider' => $promoslider,
            'productoff' => $productoff,
            'products' => $products,
            'promospecial' => $promospecial,
            'promoofficial' => $promoofficial,
        ]);
    }

    // public function subcate($id)
    // {
        
    //     return view('pages.front.index', [
    //     ]);
    // }
}
