@extends('pages.front.profile.app')

@push('content')
<div class="mx-4 h-auto p-4 border-2 rounded-lg">
    <!-- Tabs -->
        <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
            <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-red-400 rounded-t opacity-50"><a id="default-tab" href="#first">Menunggu Diulas</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Ulasan Saya</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Ulasan Pembeli</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fourth">Penalti dan Reward</a></li>
        </ul>

    <!-- Tab Contents -->
        <div id="tab-contents">
            <div id="first" class="p-4">
                <div class="flex space-x-2 items-center justify-between">
                    <div class="flex items-center">
                        <img class="w-24" src="https://ecs7.tokopedia.net/img/cache/100-square/product-1/2019/11/13/7766400/7766400_bc88909b-f9ab-44a1-89fa-b2beb8f0fa67_690_690.webp" alt="">
                        <div class="px-2">
                            <p class="font-bold">Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</p>
                            <p>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="bg-red-400 rounded py-2 px-4 text-white font-bold">Beri ulasan</a>
                    </div>
                </div>
            </div>
            <div id="second" class="hidden">
                <div class="border-2 rounded mt-2">
                    <div class="border-b-2 flex justify-between p-2 bg-gray-100 text-gray-500">
                        <span>INV/20210706/MPL/1385205190</span>
                        <span>Pesanan diterima: 07 Jul 2021, 11:48</span>
                    </div>
                    <div class="p-4 grid grid-cols-3">
                        <div class="col-span-1">
                            <div class="flex space-x-4 items-center py-2">
                                <div class="w-12">
                                    <img class="w-auto" src="https://images.tokopedia.net/img/cache/215-square/shops-1/2019/12/5/942270/942270_30637b28-4faa-4519-a587-62888c81ef05.jpg" alt="">
                                </div>
                                <div class="">
                                    <p>Absolutek Comp</p>
                                    <span class="text-xs px-2 py-1 bg-red-400 rounded">Penjual</span>
                                </div>
                                <a href="#" class="bg-red-400 rounded px-4 text-sm font-bold text-white">Follow</a>
                            </div>
                            <div class="py-2 mx-2 text-center text-gray-400 text-sm  border-b-2  border-t-2">
                                <p>Penilaian Anda</p>
                                <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/1b7ee0f2.svg" alt="">
                                <p>puas</p>
                            </div>
                        </div>
                        <div class="col-span-2 border-l-2 px-2">
                            <h1 class="font-bold pb-2">Daftar produk</h1>
                            <div class="flex space-x-2 items-center">
                                <div class="w-24">
                                    <img class="w-full" src="https://ecs7.tokopedia.net/img/cache/100-square/product-1/2019/11/13/7766400/7766400_bc88909b-f9ab-44a1-89fa-b2beb8f0fa67_690_690.webp" alt="">
                                </div>
                                <div class="w-80">
                                    <p class="font-bold">Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</p>
                                    <p>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                    </p>
                                </div>
                                <div>
                                    <a href="#" class="bg-red-400 rounded py-2 px-4 text-white font-bold">Lihat ulasan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-2 rounded mt-2">
                    <div class="border-b-2 flex justify-between p-2 bg-gray-100 text-gray-500">
                        <span>INV/20210706/MPL/1385205190</span>
                        <span>Pesanan diterima: 07 Jul 2021, 11:48</span>
                    </div>
                    <div class="p-4 grid grid-cols-3">
                        <div class="col-span-1">
                            <div class="flex space-x-4 items-center py-2">
                                <div class="w-12">
                                    <img class="w-auto" src="https://images.tokopedia.net/img/cache/215-square/shops-1/2019/10/21/1206721/1206721_13e9dca2-872f-43c9-8b6c-b1ff0d026a24.png" alt="">
                                </div>
                                <div class="">
                                    <p class="text-sm">Blue Sky Communication</p>
                                    <span class="text-xs px-2 py-1 bg-red-400 rounded">Penjual</span>
                                </div>
                                <a href="#" class="bg-red-400 rounded px-4 text-sm font-bold text-white">Follow</a>
                            </div>
                            <div class="py-2 mx-2 text-center text-gray-400 text-sm  border-b-2  border-t-2">
                                <p>Penilaian Anda</p>
                                <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/1b7ee0f2.svg" alt="">
                                <p>puas</p>
                            </div>
                        </div>
                        <div class="col-span-2 border-l-2 px-2">
                            <h1 class="font-bold pb-2">Daftar produk</h1>
                            <div class="flex space-x-2 items-center">
                                <div class="w-24">
                                    <img class="w-full" src="https://ecs7.tokopedia.net/img/cache/200-square/product-1/2019/11/19/9984113/9984113_51ac854f-bcc2-4a90-951a-0b0324404fc1_1995_1995" alt="">
                                </div>
                                <div class="w-80">
                                    <p class="font-bold">HANDSFREE HEADSET EARPHONE SPECTRUM VIRAL SUPER BASS MURAH</p>
                                    <p>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                    </p>
                                </div>
                                <div>
                                    <a href="#" class="bg-red-400 rounded py-2 px-4 text-white font-bold">Lihat ulasan</a>
                                </div>
                            </div>
                        </div>
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
            <div id="fourth" class="hidden p-4">
                Fourth tab
            </div>
        </div>
</div>
@endpush