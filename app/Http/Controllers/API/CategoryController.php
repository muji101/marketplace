<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories(Request $requset)
    {
        return Category::all();
    }

    public function subcategories(Request  $requset, $category_id)
    {
        return SubCategory::where('category_id', $category_id)->get();
    }
}
