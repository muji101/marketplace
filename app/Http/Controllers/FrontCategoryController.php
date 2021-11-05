<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontCategoryController extends Controller
{
    public function index()
    {
        $categoryall = Category::orderBy('name', 'asc')->get();
        return view('pages.front.category', [
            'categoryall' => $categoryall
        ]);
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $subcategories = SubCategory::where('category_id', $id)->get();
        $products = Product::where('category_id', $id)->get();
        // $productsubs = Product::where('subcategory_id', $sub)->get();
        return view('pages.front.category-detail', [
            'category' => $category,
            'subcategories' => $subcategories,
            'products' => $products,
            // 'productsubs' => $productsubs,
        ]);
    }

    public function detail($id, $sub = null)
    {
        $category = Category::findOrFail($id);
        $subcategories = SubCategory::where('category_id', $id)->get();
        $subnames = SubCategory::findOrFail($sub);
        $products = Product::where('category_id', $id)->get();
        $productsubs = Product::where('subcategory_id', $sub)->get();
        return view('pages.front.categorysub-detail', [
            'category' => $category,
            'subcategories' => $subcategories,
            'subnames' => $subnames,
            'products' => $products,
            'productsubs' => $productsubs,
        ]);
    }
}
