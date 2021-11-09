@extends('layouts.app')

@section('content')
    <div class="mx-32 p-4">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img class="w-full rounded-lg" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/9/24/35f78d9d-267d-4557-9e01-f550df118dfe.jpg.webp?ect=3g">
                    </li>
                    <li class="splide__slide">
                        <img class="w-full rounded-lg" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/9/24/c476a2aa-5060-4830-a84b-b9d27baee351.jpg.webp?ect=3g">
                    </li>
                    <li class="splide__slide">
                        <img class="w-full rounded-lg" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/9/23/638499fa-aae1-4578-8452-b62c1db4c11f.jpg.webp?ect=3g">
                    </li>
                    <li class="splide__slide">
                        <img class="w-full rounded-lg" src="https://images.tokopedia.net/img/cache/1208/NsjrJu/2021/9/24/451db117-50f7-4a46-a4ce-6683c2c8dcb2.jpg.webp?ect=3g">
                </ul>
            </div>
        </div>
    </div>
    
    <div class="my-12 mx-32 rounded-lg">
        <div class="flex flex-row  space-x-2">
            @foreach ($subcategories as $subcategory)
                <a href="{{ route('category-detail', [$category, $subcategory->id]) }}" class="flex flex-col p-2 items-center border-2 rounded-md">
                    <img class="w-26 rounded-lg" src="{{ asset('/storage/'.$subcategory->photo) }}">
                    <h6 class="text-sm text-gray-500">{{ $subcategory->name }}</h6>
                </a>
            @endforeach
        </div>
    </div>

    <div class="my-12 mx-32">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Produk {{ $subnames->name }}</h1>
        </div>
        <div class="py-8 flex space-x-2">
            @php
                $no = 1;
            @endphp
            @forelse ($productsubs as $product)
                <a href="{{ route('front.product-detail', $product->id) }}" class="shadow-lg rounded-lg text-left w-56">
                    <img class="mb-2 w-56 h-56 object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#{{ $no++ }}</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">{{ $product->name }}</h4>
                        <h3 class="font-bold ">Rp {{ $product->price }}</h3>
                        <h5 class="text-gray-500 text-xs">{{ $product->store->address }}</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </a>
            @empty
                <p class="mx-auto text-gray-500">Maaf produk belum tersedia!</p>
            @endforelse
        </div>
        
    </div>

    <div class="mx-32 h-auto my-12">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Produk menarik lainnya</h1>
        </div>
        <!-- Tabs -->
        <div id="tabs" class="inline-flex w-full py-4  space-x-2">
            <div class="text-left pl-2 pt-2 pb-4 pr-12  rounded-lg text-white font-bold bg-gradient-to-r from-blue-600 to-blue-400 text-md">
                <a id="default-tab" href="#first">Rekomendasi Untukmu</a>
            </div>
            <div class="text-left pl-2 pt-2 pb-4 pr-12  rounded-lg text-white font-bold bg-gradient-to-r from-blue-600 to-blue-400 text-md">
                <a href="#second">Lampu LED</a>
            </div>
            <div class="text-left pl-2 pt-2 pb-4 pr-12  rounded-lg text-white font-bold bg-gradient-to-r from-blue-600 to-blue-400 text-md">
                <a href="#third">Wireless Buds</a>
            </div>
        </div>

        <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first">
                    <div class="py-4 grid grid-cols-6 gap-2">
        
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/24/cf9ba580-8c0b-49da-a94d-6c9a773f87a3.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="second" class="hidden">
                    <div class="py-4 grid grid-cols-6 gap-2">
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/hDjmkQ/2021/7/24/1f15f7bf-358f-4925-832f-bac29f2551e1.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="third" class="hidden">
                    <div class="py-4 grid grid-cols-6 gap-2">
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/0306fc71-e493-4b9a-8ef0-6ff863206e67.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/0306fc71-e493-4b9a-8ef0-6ff863206e67.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/0306fc71-e493-4b9a-8ef0-6ff863206e67.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/0306fc71-e493-4b9a-8ef0-6ff863206e67.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/0306fc71-e493-4b9a-8ef0-6ff863206e67.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/0306fc71-e493-4b9a-8ef0-6ff863206e67.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                        <div class="col-span-1 shadow-lg rounded-lg text-left ">
                            <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/300-square/VqbcmM/2020/9/30/0306fc71-e493-4b9a-8ef0-6ff863206e67.jpg.webp?ect=4g">
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                            <h3 class="font-bold ">Rp 6.950</h3>
                            <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                            <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center py-12">
                <a href="" class="text-blue-500 font-bold px-6 py-2 border-2 border-blue-500 rounded-lg">Lebih banyak</a>
            </div>
        </div>
    </div>
    

@endsection

@push('after-script')
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

            tabTogglers[i].parentElement.classList.remove("border-yellow-400", "border-b",  "-mb-px", "opacity-100", "transition", "duration-400");  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-yellow-400", "border-b-4", "-mb-px", "opacity-100", "transition", "duration-400");
        });
        });

        document.getElementById("default-tab").click();
    </script>
@endpush  