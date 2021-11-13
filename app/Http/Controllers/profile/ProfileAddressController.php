<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data['status'] = false;
        Address::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $addresses = Address::findOrFail($id);
        return view('pages.front.profile.address-edit', [
            'addresses' => $addresses
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
        $data['status'] = false;
        $item = Address::find($id);
        $item->update($data);

        return redirect()->route('profile-index');
    }

    public function select(Request $request, $id)
    {
        //memilih alamat pengiriman
        Address::where('user_id', Auth::user()->id)->where('id', '!=', $id)->update(array('status' => false));
        Address::where('user_id', Auth::user()->id)->where('id', $id)->update(array('status' => true));

        return redirect()->route('profile-index');
    }

    public function main(Request $request, $id)
    {
        //memilih alamat utama pengiriman
        Address::where('user_id', Auth::user()->id)->where('id', '!=', $id)->update(array('is_default' => false));
        Address::where('user_id', Auth::user()->id)->where('id', $id)->update(array('is_default' => true));
        
        return redirect()->route('profile-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Address::find($id);

        $data->delete();

        return back();
    }
}
