@extends('layouts.app')

@section('content')
<div class="md:p-16 bg-blue-100 flex flex-row flex-wrap">
    <form action="{{ route('store-store') }}" method="POST" enctype="multipart/form-data" class="md:w-1/2-screen m-0 p-16 bg-white w-full tw-h-full shadow md:rounded-lg">
        @csrf
        @method('POST')
        
        <input type="hidden" value="{{ Auth::user()->id }}">
        <div class="text-2xl text-blue-900 font-bold">
            Buka Toko 
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Nama Toko</label>
            <input name="name" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="Ketikkan Nama Toko">
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Slogan Toko</label>
            <input name="slogan" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="Ketikkan Slogan Toko">
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Deskripsi Toko </label>
            <input name="description" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="Ketikkan Deskripsi Toko">
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Foto Toko</label>
            <input name="photo" type="file" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200">
        </div>

        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Cover Toko</label>
            <input name="cover" type="file" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200">
        </div>

        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Alamat</label>
            <input name="address" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="Kabupaten">
        </div>

        <div class="mt-2">
            <button class="p-3 bg-blue-400 text-white w-full hover:bg-blue-300">Buka Toko</button>
        </div>
    </form>
</div>
@endsection

