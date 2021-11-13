@extends('layouts.sell')

@section('title', 'Settings')
    
@section('content')

    <div class="p-2 mt-2">
        <div class="">
            <h1 class="font-bold">Informasi Toko</h1>
            <div class="grid grid-cols-2">
                <div class="col-span-1 border-2 rounded p-4">
                    <div class="grid grid-cols-2">
                        <div class="col-span-1">
                            <div class="">
                                <p class="font-bold">Nama Toko</p>
                                <p>{{ Auth::user()->store->name }}</p>
                            </div>
                            <div class="pt-2">
                                <p class="font-bold">Domain Toko</p>
                                <p>www.tokopedia.com/onotokoqu</p>
                            </div>
                            <div class="pt-4">
                                <a href="#" class="py-2 px-4 rounded bg-blue-300">Ubah</a>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <p class="font-bold">Gambar Toko</p>
                            <div class="flex items-center">
                                <img class="w-16 h-16 object-cover rounded mr-1" src="{{ asset('/storage/'.Auth::user()->store->photo) }}" alt="">
                                <form action="{{ route('seller.setting-photo', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="flex space-x-1">
                                        <input name="photo" type="file" class="border-2 rounded w-full p-2" >
                                        <button class="bg-blue-400 rounded font-bold text-white px-2">Ubah</button>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="py-2">
                                <p>Ukuran optimal 300 x 300 piksel dengan Besar file: Maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: JPG, JPEG, PNG</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 border-2 rounded ml-2 p-4">
                    <div class="">
                        <h5 class="pb-1 font-bold">Slogan</h5>
                        <input type="text" class="w-full p-2 rounded" value="{{ Auth::user()->store->name }}">
                    </div>
                    <div class="py-1">
                        <h5 class="py-1 font-bold">Deskripsi</h5>
                        <textarea name="" id="" rows="3" class="w-full p-2 rounded  ">{{ Auth::user()->store->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right py-4">
            <a href="#" class="py-2 px-4 bg-blue-300 rounded font-bold  ">Simpan</a>
        </div>
    </div>

    <div class="p-2">
        <h1 class="font-bold py-2">Status</h1>
        <span>
            <a href="#" class="py-2 px-4 bg-blue-300 rounded border-2 border-blue-500">Buka Toko</a>
            <a href="#" class="py-2 px-4 bg-blue-300 rounded">Tutup Toko</a>
        </span>
    </div>
    <div class="p-2">
        <h1 class="font-bold py-2">Sampul Toko</h1>
        <span>
            <img class="h-44 w-full object-cover pb-2" src="{{ asset('/storage/'.Auth::user()->store->cover )}}" alt="">
            <form action="{{ route('seller.setting-cover', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="flex space-x-1">
                    <input name="cover" type="file" class="border-2 rounded w-full p-2" >
                    <button class="bg-blue-400 rounded font-bold text-white px-2">Ubah</button>
                </div>
            </form>
        </span>
    </div>
@endsection