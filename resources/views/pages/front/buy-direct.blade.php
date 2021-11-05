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
                        <h1 class="text-xl font-bold">Beli Langsung</h1>
                        <h2 class="pt-4 font-bold">Barang yang dibeli</h2>
                        <div class="">
                            <div class="py-2">
                                <div class="flex">
                                    <img class="w-6" src="https://images.tokopedia.net/img/official_store/badge_os.png" alt="">
                                    <h1 class="font-bold">PINZY Official Store</h1>
                                </div>
                                <p class="text-xs text-gray-500">Jakarta Barat</p>
                            </div>
                            <div class="py-4">
                                <div class="flex items-center space-x-4">
                                    <img class="rounded-lg" src="https://images.tokopedia.net/img/cache/100-square/product-1/2020/7/11/48690432/48690432_73f8cf51-8be9-4323-8850-0df7f71abfc8_800_800.webp?ect=4g" alt="">
                                    <div class="">
                                        <p class="text-black font-bold uppercase">Korek Api Kompor - Lighter Pemantik Kompor Gas</p>
                                        <p class="font-bold">Rp6.350</p>
                                    </div>
                                </div>
                                <div class="text-gray-500 text-right flex justify-center space-x-4 px-6 py-4">
                                    <button class="text-blue-600 font-bold">Tulis catatan untuk barang ini</button>
                                    <div class="border-l-2"></div>
                                    <div class="space-x-2">
                                        <i class="fas fa-minus-circle"></i>
                                        <input type="number" class="w-12">
                                        <i class="text-blue-400 fas fa-plus-circle"></i>
                                    </div>
                                </div>
                                <div class="border-b-4"></div>
                                <h2 class="pt-4 font-bold">Pengiriman dan pembayaran</h2>
                                <div class="border-2 rounded p-4">
                                    <div class="border-b-2 py-2">
                                        <p class="font-bold  text-sm">Pondok <span class="font-normal text-gray-500"> - Muji (6285747245474)</span></p>
                                        <p class="text-sm text-gray-500">Pondok IT Al Madinah, Jl. Karanganyar Raya, Kec. Ngemplak, Kabupaten Sleman, Jogja, 55584[Tokopedia notes: Pondok IT Al Madinah]
                                            Ngemplak, Kab. Sleman, 55584</p>
                                    </div>
                                    <div class="border-b-2 grid grid-cols-2 py-2 gap-2">
                                        <div class="col-span-1">
                                            <h1 class="font-bold">Pilih pengiriman</h1>
                                            <label class="block text-left border-2 rounded-lg p-2">
                                                {{-- <span class="text-gray-700">Select</span> --}}
                                                <select class="form-select block w-full mt-1">
                                                    <option value="">Reguler</option>
                                                    <option value="">Karga</option>
                                                    <option value="">Ekonomi</option>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="col-span-1">
                                            <h1 class="font-bold">Pilih kurir</h1>
                                            <label class="block text-left border-2 rounded-lg p-2">
                                                {{-- <span class="text-gray-700">Select</span> --}}
                                                <select class="form-select block w-full mt-1">
                                                    <option value="">SiCepat HALU</option>
                                                    <option value="">JNE Reg</option>
                                                    <option value="">SiCepat Reg</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="pt-2 flex items-center space-x-2">
                                        <img class="w-16" src="https://ecs7.tokopedia.net/img/toppay/payment-logo/alfamart.png" alt="">
                                        <p>Alfamart / Alfamidi / Lawson / Dan+Dan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-span-1">
                    <div class="border-2 rounded-lg p-4 sticky top-32">
                        <h1 class="text-lg text-left font-bold">Ringkasan Belanja</h1>
                        <div class="flex justify-between text-gray-600">
                            <p>Total Harga (2 Barang)</p>
                            <p>Rp10.000</p>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <p>Total Ongkos Kirim</p>
                            <p>Rp25.000</p>
                        </div>
                        <div class="flex justify-between text-gray-600">
                            <p>Biaya Layanan</p>
                            <p>Rp2.500</p>
                        </div>
                        <div class="flex justify-between border-t-2 border-b-2 my-2">
                            <h1 class="text-lg my-2 text-left font-bold">Total Tagihan</h1>
                            <h1 class="text-lg my-2 text-left font-bold">Rp32.500</h1>
                        </div>
                        <button  class="py-2 w-full bg-blue-400 rounded-lg font-bold text-md text-white">Bayar</button>
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
