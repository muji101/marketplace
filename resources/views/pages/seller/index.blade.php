@extends('layouts.sell')

@section('title', 'Home')
    
@section('content')
    <div class="p-4">
        <div class="grid grid-cols-4 gap-4">
            <div class="col-span-1">
                <div class="pt-4 pb-8 px-4 bg-white text-gray-500 rounded-lg">
                    <h1>Pesanan Baru</h1>
                    <span class="font-bold text-2xl text-black">0</span>
                </div>
            </div>
            <div class="col-span-1">
                <div class="pt-4 pb-8 px-4 bg-white text-gray-500 rounded-lg">
                    <h1>Siap Kirim</h1>
                    <span class="font-bold text-2xl text-black">0</span>
                </div>
            </div>
            <div class="col-span-1">
                <div class="pt-4 pb-8 px-4 bg-white text-gray-500 rounded-lg">
                    <h1>Chat Baru</h1>
                    <span class="font-bold text-2xl text-black">0</span>
                </div>
            </div>
            <div class="col-span-1">
                <div class="pt-4 pb-8 px-4 bg-white text-gray-500 rounded-lg">
                    <h1>Diskusi Baru</h1>
                    <span class="font-bold text-2xl text-black">0</span>
                </div>
            </div>
            <div class="col-span-1">
                <div class="pt-4 pb-8 px-4 bg-white text-gray-500 rounded-lg">
                    <h1>Ulasan Baru</h1>
                    <span class="font-bold text-2xl text-black">0</span>
                </div>
            </div>
            <div class="col-span-1">
                <div class="pt-4 pb-8 px-4 bg-white text-gray-500 rounded-lg">
                    <h1>Pesanan Dikomplain</h1>
                    <span class="font-bold text-2xl text-black">0</span>
                </div>
            </div>
        </div>

        <h1 class="py-4 font-bold">Analisis Toko dan Produkmu</h1>
        <div class="bg-white rounded-lg p-4">
            <h2 class="font-bold">Statistik tokomu</h2>
            <div class="flex space-x-2">
                <div class="shadow p-4 border-b-4 rounded border-red-400 w-52">
                    <h4 class="text-sm text-gray-500">Pendapatan bersih baru</h4>
                    <p class="font-bold text-2xl">Rp0</p>
                </div>
                <div class="shadow p-4 border-b-4 rounded border-red-400 w-52">
                    <h4 class="text-sm text-gray-500">Produk dilihat</h4>
                    <p class="font-bold text-2xl">0</p>
                </div>
                <div class="shadow p-4 border-b-4 rounded border-red-400 w-52">
                    <h4 class="text-sm text-gray-500">Produk terjual</h4>
                    <p class="font-bold text-2xl">0</p>
                </div>
            </div>
            <div class="py-4">
                ini grafik
            </div>
        </div>
        <div class="bg-white rounded-lg p-4 my-4 w-1/2">
            <h2 class="font-bold">Produk terlaris ditokomu</h2>
            <div class="text-center py-2">
                <img class="w-52 mx-auto" src="https://ecs7.tokopedia.net/seller-dashboard/stock_product.png" alt="">
                <h1 class="font-bold">Belum ada produk yang terjual, nih</h1>
                <p class="text-gray-500">Yuk, buat produk di tokomu makin laris dengan iklan terbaik!</p>
                <a href="#" class="block font-bold py-2 px-12 rounded-lg bg-red-400 my-2 text-white">Buat produk</a>
            </div>
        </div>
        
    </div>
@endsection