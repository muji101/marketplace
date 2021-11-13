<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Address;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileHomeController extends Controller
{
    public function index()
    {
        $addresses = Address::where('user_id', Auth::user()->id)->get();

        return view('pages.front.profile.index' ,[
            'addresses' => $addresses
        ]);
    }

    public function changeName(Request $request, $id)
    {
        User::where('id', $id)->update(array('name' => $request->name));
        
        return back();
    }

    public function changeBirth(Request $request, $id)
    {
        User::where('id', $id)->update(array('birth_date' => $request->birth_date));
        
        return back();
    }

    public function changePhoto(Request $request, $id)
    {
        User::where('id', $id)->update(array('photo' => $request->file('photo')->store('assets/user','public')));
        
        return back();
    }

    public function changePass(Request $request, $id)
    {
        User::where('id', $id)->update(array('password' => Hash::make($request->password)));
        
        return back();
    }
}
