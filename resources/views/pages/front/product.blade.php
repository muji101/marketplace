@extends('layouts.app')

@section('content')
<div class="py-12 mx-32">
    <div class="grid grid-cols-4 gap-8 text-left">
        <div class="col-span-3">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <div class="sticky top-32">
                        {{-- <img class="w-64 rounded-lg transform hover:scale-150" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt=""> --}}
                        <div class="py-2 h-60">
                            <img id="zoom_01" class="rounded-lg h-full w-full object-cover" src="{{ asset('/storage/'.$products->galleries->first()->photo) }}"
                            data-zoom-image="{{ asset('/storage/'.$products->galleries->first()->photo) }}"/>
                        </div>
                        
                        <div class="py-4 flex space-x-2">
                            {{-- <img class="w-12 border-2 border-blue-400 rounded-lg" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                            <img class="w-12  rounded-lg" src="https://images.tokopedia.net/img/cache/100-square/VqbcmM/2021/8/1/3814c24f-0128-4847-a464-128adf338c13.jpg.webp?ect=4g" alt=""> --}}
                            @foreach ($products->galleries as $item)
                                <span>
                                    <img class="w-12 h-12  rounded-lg object-cover" src="{{ asset('/storage/'.$item->photo) }}" alt="">
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="pb-4 text-left">
                        <h1 class="font-bold text-lg">{{ $products->name }}</h1>
                        <div class="flex space-x-4 py-2">
                            <h5>Terjual <span class="text-gray-500">338</span></h5>
                            <h5><i class="text-yellow-400 fas fa-star"></i> 4.8 (<span class="text-gray-500">32 Ulasan</span>)</h5>
                            <h5>Diskusi <span class="text-gray-500">2</span></h5>
                        </div>
                        <h1 class="font-bold text-sm">Rp.{{ $products->price }}</h1>
                    </div>
                    <div id="tabs" class="py-2 text-left border-t-2 border-b-2">
                        <span>
                            <a id="default-tab" href="#first" class="font-bold text-gray-500 px-4">Detail</a>
                        </span>
                        <span>
                            <a href="#second" class="font-bold text-gray-500 px-4">Info Penting</a>
                        </span>
                    </div>
                    <div id="tab-contents">
                        <div id="first" class="py-4 text-left">
                            <ul class="text-gray-500">
                                <li>Kondisi: <span class="text-black">{{ $products->condition }}</span></li>
                                <li>Berat: <span class="text-black">{{ $products->weight }} Gram</span></li>
                                <li>Kategory: <span class="font-bold text-blue-400">{{ $products->subcategory->name }}</span></li>
                                <li>Etalase: <span class="font-bold text-blue-400">Semua Etalase</span></li>
                            </ul>
                            <div class="py-2 text-gray-500">
                                {!! $products->description !!}
                            </div>
                        </div>
                        <div id="second" class="py-4 text-left">
                            <div class="py-2">
                                <h1 class="font-bold">Aturan Penerimaan Order</h1>
                                <p class="text-gray-500">Bismillah... Sebelumnya kami ucapkan terimakasih atas kepercayaan anda memilih kami... </p>
                                <a href="#" class="text-blue-400 font-bold text-sm">Selengkapnya</a>
                            </div>
                            <div class="py-2">
                                <h1 class="font-bold">Kebijakan Pengembalian Produk</h1>
                                <p class="text-gray-500">Barang tidak boleh di buka atau isi barang tersebut tidak boleh dicoba,jika barang sudah di buka dan dicoba KAMI TIDAK BISA MENERIMA BARANG TERSEBUT LAGI.... </p>
                                <a href="#" class="text-blue-400 font-bold text-sm">Selengkapnya</a>
                            </div>
                            <div class="py-2">
                                <h1 class="font-bold">Alamat Kurang Lengkap</h1>
                                <p class="text-gray-500">Dimohon kepada pembeli untuk melengkapi alamat tujuan,jika alamat tujuan kurang lengkap NO KOMPLAIN.... </p>
                                <a href="#" class="text-blue-400 font-bold text-sm">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="py-2">
                        <div class="flex justify-between">
                            <a href="{{ route('store-show', $stores->first()->id) }}" class="flex space-x-2">
                                <img class="w-12 rounded-full" src="{{ asset('/storage/'.$stores->first()->photo) }}" alt="">
                                <div class="text-left">
                                    <h2>{{ $stores->first()->name }}</h2>
                                    <h2 class="text-blue-400">• Online</h2>
                                </div>
                            </a>
                            <button class="font-bold text-blue-400 border-2 border-blue-400 rounded-lg px-8">Follow</button>
                        </div>
                        <div class="flex justify-center space-x-4 py-4">
                            <h5><i class="fas fa-star"></i> 4.8 <span class="text-gray-500 text-sm">rata-rata ulasan</span></h5>
                            <h5>
                                <i class="fas fa-watch"></i> -+ 16 Jam
                                <span class="text-gray-500 text-sm">pesanan diproses</span>
                            </h5>
                        </div>
                    </div>
                    <div class="py-2 text-left">
                        <h1 class="font-bold">Pengiriman</h1>
                        <div class="">
                            <h4><i class="w-6 fas fa-map-marker-alt"></i> Dikirim dari <span class="font-bold">Jakarta Barat</span></h4>
                            <div class="flex">
                                <i class="w-6 fas fa-truck"></i>
                                <div class="pl-1">
                                    <h4> Ongkir Reguler 27 rb - 30 rb</h4>
                                    <h4 class="text-gray-500">Estimasi tiba 1 - 5 Oct</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <h1 class="font-bold">Ulasan (32)</h1>
                <h3 class="text-sm">{{ $products->name }}</h3>
                <div class="py-4">
                    <h3 class="text-sm">Semua Ulasan (32)</h3>
                    <div class="flex space-x-4 border-b-2 py-4">
                        <img class="w-8 h-8 rounded-full" src="https://ecs7.tokopedia.net/img/cache/100-square/default_picture_user/default_toped-15.jpg" alt="">
                        <div class="text-sm">
                            <p class="font-bold text-blue-400">Sugianto</p>
                            <p class="text-gray-400">2 minggu lalu</p>
                        </div>
                        <div class="text-sm">
                            <div class="flex">
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>barang nya bagus,cuman proses atau pengiriman nya yg lumayan lama</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <h1 class="font-bold">Diskusi (2)</h1>
                <h3 class="text-sm">Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</h3>
                <div class="py-4">
                    <div class="flex items-center justify-between text-sm border-2 p-4">
                        <h3><i class="fas fa-question"></i> 
                            Ada pertanyaan?
                            <span class="font-bold">Diskusikan dengan penjual atau pengguna lain</span>
                        </h3>
                        <button class="p-2 font-bold bg-blue-400 rounded-lg text-white">Tulis pertanyaan</button>
                    </div>
                    <div class=" my-4 p-4 border-2">
                        <div class="flex space-x-4 py-4">
                            <img class="w-8 h-8 rounded-full" src="https://ecs7.tokopedia.net/img/cache/100-square/default_picture_user/default_toped-15.jpg" alt="">
                            <div class="text-sm">
                                <p class="font-bold">Wendri <span class="font-normal text-xs text-gray-500">23 Agt</span></p>
                                <p class="text-gray-400">ready same-day bossque</p>
                            </div>
                        </div>
                        <hr>
                        <div class="p-4">
                            <div class="flex space-x-4 py-4">
                                <img class="w-8 h-8 rounded-full" src="https://images.tokopedia.net/img/cache/215-square/GAnVPX/2021/8/27/1c958df4-7d4c-4aa8-b6c0-e5c63e300d22.jpg" alt="">
                                <div class="text-sm">
                                    <p class="font-bold">Kastil Drakula <span class="font-normal text-xs bg-blue-200 text-blue-600 p-1 rounded">Penjual</span><span class="font-normal text-xs text-gray-500">23 Agt</span></p>
                                    <p class="text-gray-400">bisa di klik = ready , mhon baca deskripsi sebelum cekout juga ya</p>
                                </div>
                            </div>
                            <div class="flex space-x-4 pt-4">
                                <img class="w-8 h-8 rounded-full" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                                <div class="text-sm">
                                    <textarea name="" id="" cols="70" rows="4" class="p-2 border-2" placeholder="Isi komentar disini..."></textarea>
                                    <div class="flex justify-end space-x-2 pt-2">
                                        <button class="py-2 px-4 font-bold border-2 rounded-lg">Batal</button>
                                        <button class="py-2 px-4 font-bold bg-gray-200 rounded-lg">Kirim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-1">
            <div class="sticky top-32">
                <div class="border-2 rounded-lg p-4 mb-2">
                    <h1 class="text-lg text-left font-bold">Atur jumlah dan catatan</h1>
                    <div class="py-4 flex space-x-2 items-center">
                        <i class="fas fa-minus-circle"></i>
                        <input type="number" class="w-12">
                        <i class="text-blue-400 fas fa-plus-circle"></i>
                        <div>Stock <span class="font-bold">{{ $products->quantity }}</span></div>
                    </div>
                    <h4 class="text-left text-sm text-blue-400 font-bold"><i class="fas fa-pencil"></i> Tambah Catatan</h4>
                    <div class="flex items-end justify-between">
                        <h1 class="text-md my-2 text-left text-gray-500">Subtotal</h1>
                        <h1 class="text-lg my-2 text-left font-bold">Rp.{{ $products->price }}</h1>
                    </div>
                    {{-- <form action="{{ route }}">
                        <a href="/cart"  class=""></a>
                    </form> --}}
                    @auth
                        <form action="{{ route('cart-add', $products->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="block py-2 text-center mb-2 w-full bg-blue-400 rounded-lg font-bold text-md text-white">
                                <i class="fas fa-plus"></i> Keranjang
                            </button>  
                        </form>
                    @else
                        {{-- <a href="{{ route('login') }}" class="btn btn-success px-4 text-white btn-block mb-3">
                            Sign in to Add
                        </a> --}}
                    @endauth
                    <a  href="/checkout" class="block text-center py-2 w-full text-blue-400 border-2 border-blue-400 rounded-lg font-bold text-md text-white">Beli Langsung</a>
                    <div class="pt-2 flex justify-center space-x-2 text-xs">
                        <a href=""><i class="fas fa-comment-dots"></i> Chat</a>
                        <a href=""><i class="fas fa-heart"></i> Wishlist</a>
                        <a href=""><i class="fas fa-share"></i> Share</a>
                    </div>
                </div>
                <img src="{{ asset('/storage/'.$promos->photo) }}" alt="">
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Lainnya di toko ini</h1>
        </div>
        <div class="py-8 grid grid-cols-6 gap-4">
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/12/34d8b942-c4f3-41a3-9910-06d6ebb0c400.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/6/29/84028385/84028385_e2fa7210-2a30-4f2a-8e90-e0409e8ae1fe_1000_1000.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/5/16/910865/910865_cf2ccc9b-0d6d-4d80-ab37-b88b2cebeff8_2048_2048.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/5/10/877fcd2c-85dc-49bb-8571-4ccb7e1d2dc9.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/10/10/38905081/38905081_eb25c74b-e46f-4db3-b992-5debf67315c9_1771_1771.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/10/f2040cf0-06bf-4ddc-a65c-6a96ca0ab186.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2020/12/6/2b13c463-fa58-4e22-99b9-6eced60b1478.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/attachment/2021/6/15/-1/-1_e51276a1-0c95-4558-80dc-184cad8058e6.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Pilihan lainnya untukmu</h1>
        </div>
        <div class="py-8 grid grid-cols-6 gap-4">
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/12/34d8b942-c4f3-41a3-9910-06d6ebb0c400.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/6/29/84028385/84028385_e2fa7210-2a30-4f2a-8e90-e0409e8ae1fe_1000_1000.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/5/16/910865/910865_cf2ccc9b-0d6d-4d80-ab37-b88b2cebeff8_2048_2048.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/5/10/877fcd2c-85dc-49bb-8571-4ccb7e1d2dc9.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/10/10/38905081/38905081_eb25c74b-e46f-4db3-b992-5debf67315c9_1771_1771.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/10/f2040cf0-06bf-4ddc-a65c-6a96ca0ab186.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2020/12/6/2b13c463-fa58-4e22-99b9-6eced60b1478.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/attachment/2021/6/15/-1/-1_e51276a1-0c95-4558-80dc-184cad8058e6.jpg.webp?ect=4g">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

@push('after-script')
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>

    <script>
        $('#zoom_01').ezPlus({
            zoomType: 'inner',
            cursor: 'crosshair'
        });
    </script>
    <script>
        new Splide( '.splide', {
        type  : 'loop',
        perPage: 1,
        gap         : '1rem',
        rewind: true,
        pauseOnHover: false,
        autoplay: true,
        } ).mount();
    </script>

    <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
        toggler.addEventListener("click", function(e) {
            e.preventDefault();

            let tabName = this.getAttribute("href");

            let tabContents = document.querySelector("#tab-contents");

            for (let i = 0; i < tabContents.children.length; i++) {

            tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100", "transition", "duration-400");  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100", "transition", "duration-400");
        });
        });

        document.getElementById("default-tab").click();
    </script>
    @endpush  