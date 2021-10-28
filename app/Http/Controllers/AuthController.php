<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Village;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::get();
        // dd($users);
        return view('pages.dashboard.user.index', ['users' => $users]);

    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        //hanya mengambil request->
        $credentials = $request->only(['email','password']);

        // true akan login selamanya walaupun komputer sudah mati
        // if (Auth::attempt($credentials, true)) {
        if (Auth::attempt($credentials)) {
            //lebih aman pake ini dari serangan hacker
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        return back()->with([
            'error' => 'gagal login'
        ]);
    }

    public function create( )
    {
        $provinces = Province::get();
        $regencies = Regency::get();
        $districts = District::get();
        $villages = Village::get();

        // dd($provinces);
        
        return view('pages.dashboard.user.create', [
            'provinces' => $provinces,
            'regencies' => $regencies,
            'districts' => $districts,
            'villages' => $villages,
        ]);
    }

    public function register( )
    {
        return view('pages.auth.register');
    }

    public function reg(Request $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);
        // $data['photo'] = $request->file('photo')->store('assets/class','public');
        
        User::create($data);
        
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $users = User::findOrFail($id);

        return view('pages.dashboard.user.detail', ['users' => $users]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $data['password'] = Hash::make($data['password']);
        $data['photo'] = $request->file('photo')->store('assets/user','public');
        
        User::create($data);
        
        return redirect()->route('user.index');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }

    public function edit($id)
    {
        $provinces = Province::get();
        $regencies = Regency::get();
        $districts = District::get();
        $villages = Village::get();

        $users = User::findOrFail($id);
        
        return view('pages.dashboard.user.create', [
            'users' => $users,
            'provinces' => $provinces,
            'regencies' => $regencies,
            'districts' => $districts,
            'villages' => $villages,
        ]);
    }

    public function update(Request $request, $id)
    {
        // $data = User::findOrFail($id);
        // dd($request->password);
        // if($request->password){
        //     $request->validate([
        //         'name'=> 'required|max:25',
        //         'email'=> 'required|min:4|max:25|email:rfc,dns|unique:users,email,'.$id,
        //         // 'current_password' => 'required',
        //         'password' =>'required|min:5',
        //         'photo'
        //     ]);
    
        //     $request->merge([
        //         'password' => Hash::make($request->password)
        //     ]);
    
        //     }else{
        //         $request->validate([
        //             'name'=> 'required|max:25',
        //             'email'=> 'required|min:4|max:25|email:rfc,dns|unique:users,email,'. $id,
        //             // 'image' => 'required'
        //         ]);
        //     }

        // if ($request->password) {
        //     $data->update($request->all());
        // }else{
        //     $data['photo'] = $request->file('photo')->store('assets/user','public');
        //     $data->update($request->except('password'));
        // }

        // $data['password'] = Hash::make($data['password']);
        // $data['photo'] = $request->file('photo')->store('assets/user','public');
        
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/user', 'public');
        $data['password'] = Hash::make($data['password']);
        $item = User::find($id);
        $item->update($data);
        
        // $data->update($request->all());

        return redirect()->route('user.index');
    }

    public function delete($id)
    {
        $data  = User::find($id);

        $data->delete();
        return back();
    }
}
