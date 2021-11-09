<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class FrontStoreController extends Controller
{
    public function show($id)
    {
        $stores = Store::FindOrFail($id);
        $products = Product::where('store_id', $id)->get();
        // $users = User::select("*")
        //                 ->whereNotNull('last_seen')
        //                 ->orderBy('last_seen', 'DESC')
        //                 ->paginate(10);
        $users = User::get();

        // foreach ($users as $user) {
        //     if (Cache::has('user-is-online-' . $user->id))
        //         echo "User " . $user->name . " is online.";
        //     else
        //         echo "User " . $user->name . " is offline.";
        // }
        return view('pages.front.store', [
            'stores' => $stores,
            'products' => $products,
            'users' => $users,
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
