<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontStoreController extends Controller
{
    public function show($id)
    {
        $stores = Store::FindOrFail($id);
        $products = Product::where('store_id', $id)->get();
        return view('pages.front.store', [
            'stores' => $stores,
            'products' => $products,
        ]);
    }

    public function create()
    {
        return view('pages.front.store-create');
    }

    public function store(Request $request)
    {
        $store = Store::get();
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/store','public');
        $data['cover'] = $request->file('cover')->store('assets/cover','public');
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 1;
        $data['type'] = 'power merchant';
        Store::create($data);

        return redirect()->route('store-show', $store->count() <= 0 ? 1 : $store->last()->id+1);
    }
}
