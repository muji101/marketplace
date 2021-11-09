<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ProductGallery;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\SubCategory;

class SellerProductController extends Controller
{
    public function index()
    {
        $products = Product::where('user_id',  Auth::user()->id)->get();
        
        return view('pages.seller.product.index', ['products' => $products]);
    }
    public function detail(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $categories = Category::all();
        $subcategory = SubCategory::all();
        
        return view('pages.seller.product.detail',[
            'products' => $products,
            'categories' => $categories,
            'subcategory' => $subcategory
        ]);
    }

    public function upload(Request $request)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/product', 'public');

        ProductGallery::create($data);

        return redirect()->route('seller.product-detail', $request->product_id);
    }

    public function delete(Request $request, $id)
    {
        $item = ProductGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('seller.product-detail', $item->product_id);
    }

    public function create()
    {
        $subcategory = SubCategory::get();
        $categories = Category::get();
        
        return view('pages.seller.product.create', [
            'subcategory' => $subcategory,
            'categories' => $categories,
        ]);
    }
    // public function make(Request $request)
    // {
    //     $data = $request->all();

    //     // $data['photo'] = $request->file('photo')->store('assets/product','public');
    //     // $data['slug'] = Str::slug($request->name);
    //     // $data['status'] = $data['status'] == 'on' ? '1' : '0';

    //     Product::create($data);
    //     // $gallery = [
    //     //     'product_id' =>$product->id,
    //     //     'photo' =>$request->file('photo')->store('assets/product', 'public')
    //     // ];

    //     // ProductGallery::create($gallery);

    //     return redirect()->route('seller.product-create', $request->id);
    // }

    public function store(Request $request)
    {
        $data = $request->all();

        // $data['photo'] = $request->file('photo')->store('assets/product','public');
        $data['slug'] = Str::slug($request->name);
        $data['status'] = $data['status'] == 'on' ? '1' : '0';

        $product = Product::create($data);
        $gallery = [
            'product_id' =>$product->id,
            'photo' =>$request->file('photo')->store('assets/product', 'public')
        ];

        ProductGallery::create($gallery);

        return redirect()->route('seller.product-index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $item = Product::findOrFail($id);

        $data['slug'] = Str::slug($request->name);

        $item->update($data);

        return redirect()->route('dashboard-product');
    }

    public function destroy(Request $request, $id)
    {
        $data = Product::findOrFail($id);
        $data->delete();

        ProductGallery::where('product_id', $id)->delete();

        return  redirect()->back();
    }
}
