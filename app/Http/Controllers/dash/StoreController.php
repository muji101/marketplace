<?php

namespace App\Http\Controllers\dash;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::get();
        // $totProduct = Product::where('user_id', $stores->user_id)->get();
        // dd($totProduct);
        return view('pages.dashboard.store.index', [
            'stores' => $stores,
            // 'totProduct' => $totProduct
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();

        return view('pages.dashboard.store.create', [
            'users' => $users
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/store','public');
        $data['cover'] = $request->file('cover')->store('assets/cover','public');

        Store::create($data);
        
        return redirect()->route('stores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stores = Store::findOrFail($id);
        $products = Product::where('user_id', $stores->user_id)->limit(3)->get();

        return view('pages.dashboard.store.detail', [
            'stores' => $stores,
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stores = Store::findOrFail($id);
        $users = User::get();

        return view('pages.dashboard.store.create', [
            'stores' =>$stores,
            'users' => $users
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/store','public');
        $data['cover'] = $request->file('cover')->store('assets/cover','public');
        $item = Store::findOrFail($id);
        $item->update($data);
        
        return redirect()->route('stores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Store::findOrFail($id);

        $data->delete();

        return redirect()->back();
    }
}
