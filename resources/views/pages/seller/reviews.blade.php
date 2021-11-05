@extends('layouts.sell')

@section('title', 'Review')

@section('content')
    <div class="p-4">
        <h1 class="font-bold text-lg">Ulasan</h1>
        <div class="h-auto p-4 border-2 rounded-lg bg-white">
            <!-- Tabs -->
                <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
                    <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">Rating Produk</a></li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Inbox Ulasan</a></li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Penilaian Pembeli</a></li>
                </ul>
        
            <!-- Tab Contents -->
                <div id="tab-contents">
                    <div id="first" class="p-4">
                        <div class="py-2">
                            <h1 class="font-bold">Rata-rata  rating 0 produk</h1>
                            <div class="flex py-4 items-center space-x-4">
                                <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                <p class="font-bold text-5xl">0.0<span class="text-gray-500 text-lg">/5.0</span></p>
                                <p class="text-lg"><span class="font-bold">0</span> ulasan</p>
                            </div>
                            <div class="py-2">
                                <table style="width: 100%">
                                    <tr class="text-left border-t-2 border-b-2 h-12">
                                        <th style="width: 40%">Nama Produk</th>
                                        <th style="width: 15%">Rating</th>
                                        <th style="width: 15%">Total Ulasan</th>
                                        <th style="width: 30%">Topik Populer</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="flex items-center space-x-2">
                                                <img class="w-14 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                                                <h1>Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</h1>
                                            </div>
                                        </td>
                                        <td><i class="fas fa-star text-yellow-400"></i>5</td>
                                        <td>12</td>
                                        <td>
                                            <div class="flex flex-wrap gap-1 py-2">
                                                <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">pengiriman</a>
                                                <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">kualitas</a>
                                                <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">kemasan</a>
                                                <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">pelayanan</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="second" class="hidden">
                        <div class="grid grid-cols-4 py-4 border-t-2">
                            <div class="col-span-1">
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                    <p class="font-bold text-5xl">5</p>
                                </div>
                                <p>Oleh<span class="font-bold"> Evy maria</span></p>
                                <p class="text-gray-500">Kemarin</p>
                            </div>
                            <div class="col-span-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-14 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                                    <h1>Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</h1>
                                </div>
                                <p class="py-2">Tes</p>
                                <input type="text" class="p-2 w-full rounded-lg border-2" placeholder="Balas di sini">
                            </div>
                        </div>
                        <div class="grid grid-cols-4 py-4 border-t-2">
                            <div class="col-span-1">
                                <div class="flex items-center">
                                    <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                    <p class="font-bold text-5xl">5</p>
                                </div>
                                <p>Oleh<span class="font-bold"> Evy maria</span></p>
                                <p class="text-gray-500">Kemarin</p>
                            </div>
                            <div class="col-span-3">
                                <div class="flex items-center space-x-2">
                                    <img class="w-14 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                                    <h1>Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</h1>
                                </div>
                                <p class="py-2">Tes</p>
                                <input type="text" class="p-2 w-full rounded-lg border-2" placeholder="Balas di sini">
                            </div>
                        </div>
                    </div>
                    <div id="third" class="hidden border-2 rounded mt-2">
                        <div class="border-b-2 flex justify-between p-2 bg-gray-100">
                            <span>Pembeli</span>
                            <span>Pesan diterima: 17 Nov 2021, 12:08</span>
                        </div>
                        <div class="p-4">
                            <div class="grid grid-cols-6">
                                <div class="col-span-1">
                                    <img src="https://ecs7.tokopedia.net/img/cache/100-square/product-1/2019/11/13/7766400/7766400_bc88909b-f9ab-44a1-89fa-b2beb8f0fa67_690_690.webp" alt="">
                                </div>
                                <div class="col-span-5">
                                    <p class="font-bold">Tp-link TL WN725N : 150Mbps Wireless N Nano USB Adapter N USB Wifi</p>
                                    <p>
                                            <i class="text-yellow-400 fas fa-star"></i>
                                            <i class="text-yellow-400 fas fa-star"></i>
                                            <i class="text-yellow-400 fas fa-star"></i>
                                            <i class="text-yellow-400 fas fa-star"></i>
                                            <i class="text-yellow-400 fas fa-star"></i>
                                    </p>
                                    <p class="text-gray-500 py-4">Mantap produk sesuai pesanan dan nyaman dipakai, pengiriman cepat dan respon toko sangat ramah</p>
                                    <span class="text-gray-500">17 Nov 2021, 12:08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection