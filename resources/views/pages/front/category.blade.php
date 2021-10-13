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
    
    <div class="my-12 mx-32 shadow-md rounded-lg">
        <div class="flex flex-row  space-x-2">
            <div class="flex flex-col p-2 items-center border-2 rounded-md">
                <img class="w-26 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/260x200/attachment/2020/3/16/77305583/77305583_7ad02a13-2332-4242-993e-9b8d2da5d7c1.png.webp">
                <h6 class="text-sm text-gray-500">Audio</h6>
            </div>
            <div class="flex flex-col p-2 items-center border-2 rounded-md">
                <img class="w-26 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/260x200/attachment/2020/3/16/77305583/77305583_ec3b77ca-70fa-45da-83ad-29f3dfd64ce8.png.webp">
                <h6 class="text-sm text-gray-500">Alat Pendingin Ruangan</h6>
            </div>
            <div class="flex flex-col p-2 items-center border-2 rounded-md">
                <img class="w-26 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/260x200/attachment/2020/3/16/77305583/77305583_8ac3a7e4-1530-4004-a31c-06dc5d6ac185.png.webp">
                <h6 class="text-sm text-gray-500">Elektronik Dapur</h6>
            </div>
            <div class="flex flex-col p-2 items-center border-2 rounded-md">
                <img class="w-26 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/260x200/attachment/2020/3/16/77305583/77305583_05a9e001-e041-49cc-b7ce-c5cebd79d308.png.webp">
                <h6 class="text-sm text-gray-500">Elektronik Kantor</h6>
            </div>
            <div class="flex flex-col p-2 items-center border-2 rounded-md">
                <img class="w-26 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/260x200/attachment/2020/3/16/77305583/77305583_be0cd94c-57f7-448c-9955-6f2ebabd37c0.png.webp">
                <h6 class="text-sm text-gray-500">Elektronik Rumah Tangga</h6>
            </div>
            <div class="flex flex-col p-2 items-center border-2 rounded-md">
                <img class="w-26 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/260x200/attachment/2020/3/16/77305583/77305583_ab1bf53b-b396-4631-a95d-cdd78fc2228e.png.webp">
                <h6 class="text-sm text-gray-500">Kamera Pengintai</h6>
            </div>
        </div>
    </div>

    <div class="my-12 mx-32">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Produk Terlaris</h1>
            <span class="text-sm text-gray-500">Elektronik yang lagi hits hari ini</span>
        </div>
        <div class="py-8 flex space-x-2">
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/8/26/cce7a6c9-38ac-475b-8f39-a9390a0c3fd3.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#1</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/8/25/336c5e45-316d-4f25-b1fc-99b7dc4c5492.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#2</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/9/9/a45dae3c-be1e-475b-afb8-d3ad558403db.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#3</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/9/2/7b2de073-c8c3-45d8-adf4-637a5075f065.png.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#4</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/7/1/8782f1fc-c840-4bf2-8910-59b60877ee5a.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#5</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/4/15/79e52bb0-a6ed-42df-917f-9aac56a069fe.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#6</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
        </div>
        
        <div class="pt-4 flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Speaker Bluetooth</h1>
        </div>
        <div class="py-4 flex space-x-2">
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/12/34d8b942-c4f3-41a3-9910-06d6ebb0c400.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#1</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/6/29/84028385/84028385_e2fa7210-2a30-4f2a-8e90-e0409e8ae1fe_1000_1000.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#2</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/5/16/910865/910865_cf2ccc9b-0d6d-4d80-ab37-b88b2cebeff8_2048_2048.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#3</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/5/10/877fcd2c-85dc-49bb-8571-4ccb7e1d2dc9.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#4</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/10/10/38905081/38905081_eb25c74b-e46f-4db3-b992-5debf67315c9_1771_1771.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#5</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
            <div class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/10/f2040cf0-06bf-4ddc-a65c-6a96ca0ab186.jpg.webp?ect=4g">
                <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">#6</span>
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                    <h3 class="font-bold ">Rp 6.950</h3>
                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                    <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </div>
        </div>

        {{-- <div class="py-4">
            <div class="flex items-center space-x-2">
                <h1 class="text-xl font-bold text-left">Produk menarik lainnya</h1>
            </div>
            <div class="flex space-x-2">
                <button class="text-left pl-2 pr-6 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-green-600 to-green-400 text-md">Rekomendasi Untukmu</button>
                <button class="text-left pl-2 pr-6 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-green-600 to-green-400 text-md">Lampu LED</button>
                <button class="text-left pl-2 pr-6 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-green-600 to-green-400 text-md">Wireless Buds</button>
                <button class="text-left pl-2 pr-6 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-green-600 to-green-400 text-md">Microwave</button>
            </div>
            <div class="py-8 grid grid-cols-6 gap-4">
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/12/34d8b942-c4f3-41a3-9910-06d6ebb0c400.jpg.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/6/29/84028385/84028385_e2fa7210-2a30-4f2a-8e90-e0409e8ae1fe_1000_1000.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/5/16/910865/910865_cf2ccc9b-0d6d-4d80-ab37-b88b2cebeff8_2048_2048.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/5/10/877fcd2c-85dc-49bb-8571-4ccb7e1d2dc9.jpg.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/product-1/2020/10/10/38905081/38905081_eb25c74b-e46f-4db3-b992-5debf67315c9_1771_1771.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2021/6/10/f2040cf0-06bf-4ddc-a65c-6a96ca0ab186.jpg.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
                </div>
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/VqbcmM/2020/12/6/2b13c463-fa58-4e22-99b9-6eced60b1478.jpg.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </div>
                <div class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-26 rounded-t-lg" src="https://images.tokopedia.net/img/cache/250-square/attachment/2021/6/15/-1/-1_e51276a1-0c95-4558-80dc-184cad8058e6.jpg.webp?ect=4g">
                    <span class="bg-yellow-400 py-1 pl-1 pr-4 text-sm text-white rounded-r-full">terlaris</span>
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">Case Luxury Candi Love Samsung A10S</h4>
                        <h3 class="font-bold ">Rp 6.950</h3>
                        <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>
                        <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>

    <div class="mx-32 h-auto my-12">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Produk menarik lainnya</h1>
        </div>
        <!-- Tabs -->
        <div id="tabs" class="inline-flex w-full py-4  space-x-2">
            <div class="text-left pl-2 pt-2 pb-4 pr-12  rounded-lg text-white font-bold bg-gradient-to-r from-green-600 to-green-400 text-md">
                <a id="default-tab" href="#first">Rekomendasi Untukmu</a>
            </div>
            <div class="text-left pl-2 pt-2 pb-4 pr-12  rounded-lg text-white font-bold bg-gradient-to-r from-green-600 to-green-400 text-md">
                <a href="#second">Lampu LED</a>
            </div>
            <div class="text-left pl-2 pt-2 pb-4 pr-12  rounded-lg text-white font-bold bg-gradient-to-r from-green-600 to-green-400 text-md">
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
                <a href="" class="text-green-500 font-bold px-6 py-2 border-2 border-green-500 rounded-lg">Lebih banyak</a>
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