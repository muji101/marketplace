@extends('layouts.app')

@section('content')
    <div>
        {{-- <div class="mx-36 py-6">
            <img src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/88199797.svg" alt="">
        </div>
        <hr> --}}

        <div class="py-12 mx-32">
            <div class="grid grid-cols-4">
                <div class="col-span-3">
                    <div class="text-left px-4">
                        <h1 class="text-xl font-bold">Checkout</h1>
                        <h2 class="pt-4 font-bold">Alamat Pengiriman</h2>
                        <div class="text-sm border-t-2 border-b-2 my-2 py-2">
                            <div class="space-x-1">
                                <span class="font-bold">Muji Kuwat</span>
                                <span>(Rumah)</span>
                                <span class="bg-red-100 text-red-600 text-xs py-1 px-2">Utama</span>
                            </div>
                            <p>6285747245474</p>
                            <p class="text-gray-500">Ds. wonosari Rt 6 Rw 3 no rumah 21 Bawang, Kab. Batang, 51274
                            </p>
                        </div>
                        <div class="py-2">
                            <button class="font-bold py-2 px-4 border-2 rounded-lg">Pilih Alamat Lain</button>
                        </div>
                        <div class="border-b-4 py-2"></div>
                        <h2 class="font-bold">Pesanan 1</h2>
                        <div class="">
                            <div class="py-2">
                                <div class="flex">
                                    <img class="w-6" src="https://images.tokopedia.net/img/official_store/badge_os.png" alt="">
                                    <h1 class="font-bold">PINZY Official Store</h1>
                                </div>
                                <p class="text-xs text-gray-500">Jakarta Barat</p>
                            </div>
                            <div class="flex justify-between items-center space-x-3 py-4 border-b-2">
                                <div class="flex items-center space-x-4">
                                    <img class="rounded-lg" src="https://images.tokopedia.net/img/cache/100-square/product-1/2020/7/11/48690432/48690432_73f8cf51-8be9-4323-8850-0df7f71abfc8_800_800.webp?ect=4g" alt="">
                                    <div class="">
                                        <p class="text-black">Korek Api Kompor - Lighter Pemantik Kompor Gas</p>
                                        <p>1 barang(70 gr)</p>
                                        <p class="font-bold">Rp6.350</p>
                                    </div>
                                </div>
                                <div class="font-bold">
                                    <h2>Pilih Durasi</h2>
                                    <button class="bg-red-400 rounded-lg px-32 py-2 font-bold text-white">Pengiriman</button>
                                </div>
                            </div>
                            <div class="py-2 font-bold flex justify-between">
                                <h1>Subtotal</h1>
                                <h1>Rp6.350</h1>
                            </div>
                            <div class="flex justify-between">
                                <h1 class="text-gray-500">Harga (1 barang)</h1>
                                <h1>Rp6.350</h1>
                            </div>
                        </div>
                        <div class="border-b-4 py-2"></div>
                        <h2 class="font-bold">Pesanan 2</h2>
                        <div class="">
                            <div class="py-2">
                                <div class="flex">
                                    <img class="w-6" src="https://images.tokopedia.net/img/official_store/badge_os.png" alt="">
                                    <h1 class="font-bold">PINZY Official Store</h1>
                                </div>
                                <p class="text-xs text-gray-500">Jakarta Barat</p>
                            </div>
                            <div class="flex justify-between items-center space-x-3 py-4 border-b-2">
                                <div class="flex items-center space-x-4">
                                    <img class="rounded-lg" src="https://images.tokopedia.net/img/cache/100-square/product-1/2020/7/11/48690432/48690432_73f8cf51-8be9-4323-8850-0df7f71abfc8_800_800.webp?ect=4g" alt="">
                                    <div class="">
                                        <p class="text-black">Korek Api Kompor - Lighter Pemantik Kompor Gas</p>
                                        <p>1 barang(70 gr)</p>
                                        <p class="font-bold">Rp6.350</p>
                                    </div>
                                </div>
                                <div class="font-bold">
                                    <h2>Pilih Durasi</h2>
                                    <button class="bg-red-400 rounded-lg px-32 py-2 font-bold text-white">Pengiriman</button>
                                </div>
                            </div>
                            <div class="py-2 font-bold flex justify-between">
                                <h1>Subtotal</h1>
                                <h1>Rp6.350</h1>
                            </div>
                            <div class="flex justify-between">
                                <h1 class="text-gray-500">Harga (1 barang)</h1>
                                <h1>Rp6.350</h1>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-1">
                    <div class="border-2 rounded-lg p-4 sticky top-32">
                        <h1 class="text-lg text-left font-bold">Ringkasan Belanja</h1>
                        <div class="flex justify-between py-4   border-b-2">
                            <p>Total Harga (2 produk)</p>
                            <p>Rp6.350</p>
                        </div>
                        <div class="flex justify-between">
                            <h1 class="text-lg my-2 text-left font-bold">Total Tagihan</h1>
                            <h1 class="text-lg my-2 text-left font-bold">Rp6.350</h1>
                        </div>
                        <button  class="py-2 w-full bg-red-400 rounded-lg font-bold text-md text-white">Pilih Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- <hr>
        <div class=" mx-36 flex items-center space-x-4 py-4">
            <img class="w-12" src="https://ecs7.tokopedia.net/assets-unify/img/ic-toped.jpg" alt="">
            <span>&copy 2021</span>
        </div> --}}
        
    </div>
@endsection
