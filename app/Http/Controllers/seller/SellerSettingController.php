<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerSettingController extends Controller
{
    public function index()
    {
        // $store = Store::where('user_id', Auth::user()->id)->get();
        return view('pages.seller.store-setting', [
            // 'store' => $store 
        ]);
    }

    public function rubahphoto(Request $request, $id)
    {
        Store::where('user_id', $id)->update(array('photo' => $request->file('photo')->store('assets/store','public')));
        
        return back();
    }

    public function rubahcover(Request $request, $id)
    {
        Store::where('user_id', $id)->update(array('cover' => $request->file('cover')->store('assets/cover','public')));
        
        return back();
    }
}
