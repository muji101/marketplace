@extends('layouts.app')

@section('content')
    <div class="py-12 mx-32">
        <div class="grid grid-cols-4">
            <div class="col-span-3">
                <div class="text-left px-4">
                    <h1 class="text-xl font-bold">Keranjang</h1>
                    <label class="flex items-center space-x-3">
                        <input type="checkbox">
                        <img class="rounded-lg" src="https://images.tokopedia.net/img/cache/100-square/product-1/2020/7/11/48690432/48690432_73f8cf51-8be9-4323-8850-0df7f71abfc8_800_800.webp?ect=4g" alt="">
                        <div class="">
                            <h3>Korek Api Kompor - Lighter Pemantik Kompor Gas</h3>
                            <h3 class="font-bold">Rp6.350</h3>
                        </div>
                    </label>
                    <div class="text-gray-500 text-right flex justify-between px-6 py-4">
                        <button class="text-green-600">Tulis catatan untuk barang ini</button>
                        <h5 class="">Pindahkan ke Wishlist | <i class="fas fa-trash-alt"></i></h5>
                        <div class="space-x-2">
                            <i class="fas fa-minus-circle"></i>
                            <input type="number" class="w-12">
                            <i class="text-green-400 fas fa-plus-circle"></i>
                        </div>
                    </div>
                </div>

                <div class="py-8 px-4">
                    <div class="flex justify-between">
                        <h1 class="text-lg text-left font-bold">Terakhir Dilihat</h1>
                        <a href="#" class="text-md text-left text-green-500 font-bold">Lihat Semua</a>
                    </div>
                    <div class="py-4 grid grid-cols-5 gap-2">
                        
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="py-8 px-4">
                    <div class="flex justify-between">
                        <h1 class="text-lg text-left font-bold">Rekomendasi Untukmu</h1>
                        <a href="#" class="text-md text-left text-green-500 font-bold">Lihat Semua</a>
                    </div>
                    <div class="py-4 grid grid-cols-5 gap-2">
                        
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        <div class="shadow-md rounded-lg text-left">
                            <img class="mb-2 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                                <h3 class="font-bold ">Rp 6.950</h3>
                                <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-green-400 rounded-lg text-green-400 w-full mt-4 font-bold py-2">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
            <div class="col-span-1">
                <div class="border-2 rounded-lg p-4 sticky top-32">
                    <h1 class="text-lg text-left font-bold">Ringkasan Belanja</h1>
                    <div class="flex justify-between py-4   border-b-2">
                        <div class="text-left text-gray-500">
                            <p>Total Harga (1 barang)</p>
                            <p>Total Diskon Barang</p>
                        </div>
                        <div class="text-right text-gray-500">
                            <p>Rp12.500</p>
                            <p>-Rp6.150</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <h1 class="text-lg my-2 text-left font-bold">Total Harga</h1>
                        <h1 class="text-lg my-2 text-left font-bold">Rp6.350</h1>
                    </div>
                    <a href="/checkout"  class="py-2 block text-center bg-green-400 rounded-lg font-bold text-md text-white">Beli (1)</a>
                </div>
            </div>
        </div>
    </div>
@endsection