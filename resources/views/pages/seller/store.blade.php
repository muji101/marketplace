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
                                <p>Onotokoqu</p>
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
                                <img class="w-16 rounded" src="https://images.tokopedia.net/img/seller_no_logo_3.png" alt="">
                                <input class="ml-2" type="file">
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
                        <input type="text" class="w-full p-2 rounded">
                    </div>
                    <div class="py-1">
                        <h5 class="py-1 font-bold">Deskripsi</h5>
                        <textarea name="" id="" rows="3" class="w-full p-2 rounded  "></textarea>
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
            <img src="#" alt="">
            <input type="file">
        </span>
    </div>
@endsection