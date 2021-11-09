@extends('layouts.app')

@section('content')
    <div class="mx-32 p-4">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($promoslider as $slider)
                        <li class="splide__slide">
                            <img class="w-full rounded-lg" src="{{ asset('/storage/'.$slider->photo) }}">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="my-12 mx-32 p-4 shadow-md rounded-lg">
        <h1 class="text-xl font-bold text-left">Kategori Pilihan</h1>
        <div class="flex flex-wrap   justify-start gap-4">
            @foreach ($subcategories as $item)
                <a href="{{ route('category-detail', [ $item->category->id, $item->id ]) }}" class=" border-2 rounded-md">
                    <img class="w-36 rounded-lg" src="{{ asset('/storage/'. $item->photo) }}">
                </a>
            @endforeach
        </div>

        <div class="py-4 flex space-x-1 justify-between overflow-x-auto">
            <a href="{{ route('category-index') }}" class="border-2 px-1 rounded-xl lg:flex  items-center justify-center">
                <img class="w-8 hidden lg:block" src="https://images.tokopedia.net/img/cache/100-square/iEWsxH/2021/10/5/461aa510-5537-41b7-92d4-684d39c9930e.png">
                <h4 class="text-gray-500 text-sm">Kategori</h4>
            </a>
            
            @foreach ($categories as $item)
                <a href="{{ route('category-show', $item->id) }}" class="border-2 px-1 rounded-xl lg:flex  items-center justify-center w-auto">
                    <img class="w-8 hidden lg:block" src="{{ asset('/storage/'.$item->photo) }}">
                    <h4 class=" text-gray-500 text-sm">{{ $item->name }}</h4>
                </a>
            @endforeach
        </div>
    </div>

    <div class="my-12 mx-32 border-b-2">
        <h1 class="text-xl font-bold text-left">Produk Pilihan</h1>
        <div class="flex space-x-4 py-8">
            @foreach ($products as $product)
            <a href="{{ route('front.product-detail', $product->id) }}" class="w-52 shadow-lg rounded-lg text-left ">
                <div class="">
                    <img class="w-full h-48 mb-2  object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                </div>
                <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                <div class="p-2">
                    <h4 class="text-sm">{{ Str::limit($product->name, 44, '...') }}</h4>
                    <h3 class="font-bold py-1">Rp {{ number_format($product->price) }}</h3>
                    <h5 class="text-gray-500 text-xs">{{ $product->store->address }}</h5>
                    <h5 class=" text-gray-600 text-xs pt-2"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <div class="my-12 mx-32 py-6 border-b-2">
        <h1 class="text-xl font-bold text-left">Spesial di Tokobilu hari ini</h1>
        <div class="py-4 grid grid-cols-3 gap-12">
            @foreach ($promospecial as $item)
            <div class="col-span-1">
                <img class="rounded-xl" src="{{ asset('/storage/'. $item->photo) }}" alt="">
            </div>
            @endforeach
        </div>
    </div>

    <div class="my-12 mx-32 py-6 border-b-2">
        <h1 class="text-xl font-bold text-left">Lagi Trending, nih</h1>
        <div class="py-4 grid grid-cols-4 gap-4">

            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/product-1/2020/7/20/107234880/107234880_2a6f46f8-19e3-4f51-badf-335ac51ff449_548_548.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Redemi 4x</h4>
                    <h5 class="text-sm text-gray-500">235rb produk</h5>
                </div>
            </div>
            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/VqbcmM/2020/10/7/effb10ef-9de4-4b31-b116-0f9a3c944b98.png.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Sepeda Anak</h4>
                    <h5 class="text-sm text-gray-500">285rb produk</h5>
                </div>
            </div>
            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/5/19/0594a5a9-6f29-4e17-a122-93ba72888bdc.jpg.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Headphone Bluetooth</h4>
                    <h5 class="text-sm text-gray-500">135rb produk</h5>
                </div>
            </div>
            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/4/14/d81ef38c-9e51-40c2-9401-4f6538762102.jpg.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Tali Masker</h4>
                    <h5 class="text-sm text-gray-500">95rb produk</h5>
            </div>
            </div>
            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/product-1/2020/6/26/930204161/930204161_59ea3129-322b-4650-8916-a0934d8f13bf_1060_1060.jpg.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Rak Buku</h4>
                    <h5 class="text-sm text-gray-500">127rb produk</h5>
                </div>
            </div>
            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/VqbcmM/2021/1/26/af7c85e3-535a-4360-8e63-5a133cfe76ad.jpg.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Ikan Cupang</h4>
                    <h5 class="text-sm text-gray-500">212rb produk</h5>
                </div>
            </div>
            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/product-1/2017/5/18/535719/535719_a98674ce-5483-471b-a8b0-7c5fe0a50193.jpg.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Sepatu Roda</h4>
                    <h5 class="text-sm text-gray-500">235rb produk</h5>
                </div>
            </div>
            <div class="col-span-1 rounded-lg shadow-md flex items-center">
                <img class="rounded-l-lg w-28" src="https://images.tokopedia.net/img/cache/200-square/product-1/2020/8/21/45744990/45744990_533336f8-1669-4c92-92fa-623f584a3155_454_454.webp?ect=4g" alt="">
                <div class="text-left flex flex-col pl-4">
                    <h4 class="font-bold">Kipas Angin Dinding</h4>
                    <h5 class="text-sm text-gray-500">235rb produk</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="my-12 mx-32 py-6 border-b-2">
        <h1 class="text-xl font-bold text-left">Official Store <a href="/official" class="text-blue-500 text-base">Lihat Semua</a></h1>
        <div class="py-4 flex items-center static">
            <div class="bg-blue-600 rounded-xl w-80 py-4">
                @foreach ($promoofficial as $item)
                    <img class="w-36 rounded-xl ml-8" src="{{ asset('/storage/'.$item->photo) }}" alt="">
                @endforeach
            </div>
            <div class="absolute rounded-lg left-80 bg-white flex space-x-4">
                @foreach ($productoff as $item)
                    <a href="{{ route('front.product-detail', $item->id) }}" class="shadow-lg rounded-lg text-left w-52">
                        <div class="">
                            <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('/storage/'.$item->galleries->first()->photo) }}">
                        </div>
                        <span class="bg-purple-400 py-1 px-2 text-sm text-white rounded-b-lg">official</span>
                        <div class="px-2 leading-6 py-2">
                            <h4 class="text-sm">{{ Str::limit($item->name, 44, '...') }}</h4>
                            <h3 class="font-bold py-1">Rp {{ number_format($item->price) }}</h3>
                            <h5 class="text-gray-500 text-xs"><i class="text-blue-400 fas fa-check"></i> Kota {{ $item->store->address }}</h5>
                            <h5 class=" text-gray-600 text-xs pt-2"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <div class="mx-32 h-auto my-12">
        <!-- Tabs -->
        <div id="tabs" class="inline-flex w-full pt-2 justify-between space-x-2">
            <div  class="flex-auto text-left pl-2 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-purple-600 to-purple-400 text-md">
                <a id="default-tab" href="#first">For Muji</a>
            </div>
            <div class="flex-auto text-left pl-2 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-yellow-600 to-yellow-400 text-md">
                <a href="#second">Produk Populer</a>
            </div>
            <div class="flex-auto text-left pl-2 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-red-600 to-red-400 text-md">
                <a href="#third">Kompor</a>
            </div>
            <div class="flex-auto text-left pl-2 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-blue-600 to-blue-400 text-md">
                <a href="#fourth">Buku Internet & Web</a>
            </div>
            <div class="flex-auto text-left pl-2 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-yellow-600 to-yellow-400 text-md">
                <a href="#five">Aktivitasmu</a>
            </div>
            <div class="flex-auto text-left pl-2 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-red-600 to-red-400 text-md">
                <a href="#six">Special Discount</a>
            </div>
            <div class="flex-auto text-left pl-2 pt-2 pb-4  rounded-lg text-white font-bold bg-gradient-to-r from-blue-600 to-blue-400 text-md">
                <a href="#seven">Local Fest</a>
            </div>
        </div>

        <!-- Tab Contents -->
            <div id="tab-contents">
                <div id="first">
                    <div class="py-4 grid grid-cols-6 gap-4">
                        @foreach ($productall as $product)
                        <a href="{{ route('front.product-detail', $product->id) }}" class="col-span-1 shadow-lg rounded-lg text-left ">
                            <div class="">
                                <img class="w-full h-48 mb-2  object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                            </div>
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="p-2">
                                <h4 class="text-sm">{{ Str::limit($product->name, 44, '...') }}</h4>
                                <h3 class="font-bold py-1">Rp {{ number_format($product->price) }}</h3>
                                <h5 class="text-gray-500 text-xs">{{ $product->store->address }}</h5>
                                <h5 class=" text-gray-600 text-xs pt-2"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div id="second" class="hidden">
                    <div class="py-4 grid grid-cols-6 gap-4">
                        @foreach ($productall as $product)
                        <a href="{{ route('front.product-detail', $product->id) }}" class="col-span-1 shadow-lg rounded-lg text-left">
                            <div class="">
                                <img class="w-full h-48 mb-2  object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                            </div>
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="p-2">
                                <h4 class="text-sm">{{ Str::limit($product->name, 44, '...') }}</h4>
                                <h3 class="font-bold py-1">Rp {{ number_format($product->price) }}</h3>
                                <h5 class="text-gray-500 text-xs">{{ $product->store->address }}</h5>
                                <h5 class=" text-gray-600 text-xs pt-2"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div id="third" class="hidden">
                    <div class="py-4 grid grid-cols-6 gap-4">
                        @foreach ($productall as $product)
                        <a href="{{ route('front.product-detail', $product->id) }}" class="col-span-1 shadow-lg rounded-lg text-left">
                            <div class="">
                                <img class="w-full h-48 mb-2  object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                            </div>
                            <span class="bg-yellow-400 py-1 px-2 text-sm text-white rounded-r-lg">terlaris</span>
                            <div class="p-2">
                                <h4 class="text-sm">{{ Str::limit($product->name, 44, '...') }}</h4>
                                <h3 class="font-bold py-1">Rp {{ number_format($product->price) }}</h3>
                                <h5 class="text-gray-500 text-xs">{{ $product->store->address }}</h5>
                                <h5 class=" text-gray-600 text-xs pt-2"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div id="fourth" class="hidden">
                    Fourth tab
                </div>
                <div id="five" class="hidden">
                    Five tab
                </div>
                <div id="six" class="hidden">
                    Six tab
                </div>
                <div id="seven" class="hidden">
                    Seven tab
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