<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Store;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::get();
        $search = $request->get('search');
        
        $products = Product::where('name', 'like', '%'.$search.'%')
        ->orWhere('slug', 'like', '%'.$search.'%')
        ->orWhere('description', 'like', '%'.$search.'%')
        ->get();
        $stores = Store::where('name', 'like', '%'.$search.'%')
        ->orWhere('type', 'like', '%'.$search.'%')
        ->orWhere('address', 'like', '%'.$search.'%')
        ->get();

        return view('pages.front.search', [
            'stores' => $stores,
            'products' => $products,
            'categories' => $categories, 
        ]);
    }
    public function searchCategory(Request $request, $slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where('category_id', $category->id)->paginate(32);
        
        return view('pages.front.search', [
            'categories' => $categories,
            'products' => $products,
            ]);
    }
}
