@extends('layouts.app')

@section('content')
    <div class="py-12 mx-32">
        <div class="text-left grid grid-cols-6">
            <div class="col-span-1">
                <div class="flex justify-center">
                    <div class="mr-2">
                        <h1 class="font-bold">Filter</h1>
                        <div class="bg-white max-w-xl mx-auto border border-gray-200" x-data="{selected:null}">
                            <ul class="shadow-box py-1">
                                <li class="relative">
                                    <button type="button" class="w-full px-2 py-1 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-bold">Kategori</span>
                                            <span class="fas fa-angle-down"></span>
                                        </div>
                                    </button>
                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                        <div class="flex flex-col px-4 pb-2 text-sm  text-gray-500">
                                            <a href="#" class="px-2 py-1 hover:bg-gray-100 rounded">Komputer & Laptop</a>
                                            <a href="#" class="px-2 py-1 hover:bg-gray-100 rounded">Elektronik</a>
                                            <a href="#" class="px-2 py-1 hover:bg-gray-100 rounded">Rumah Tangga</a>
                                            <a href="#" class="px-2 py-1 hover:bg-gray-100 rounded">Perlengkapan Pesta & Craft</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white max-w-xl mx-auto border border-gray-200" x-data="{selected:null}">
                            <ul class="shadow-box py-1">
                                <li class="relative">
                                    <button type="button" class="w-full px-2 py-1 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-bold">Jenis Toko</span>
                                            <span class="fas fa-angle-down"></span>
                                        </div>
                                    </button>
                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                        <div class="flex flex-col px-4 pb-2 text-sm text-gray-500">
                                            <label class="flex items-center space-x-2">
                                                <input type="checkbox">
                                                <p>Official Store</p>
                                                <img class="w-4" src="https://ecs7.tokopedia.net/img/autocomplete/ic_os.png" alt="">
                                            </label>
                                            <label class="flex items-center space-x-2">
                                                <input type="checkbox">
                                                <p>Power Merchant Pro</p>
                                                <img class="w-4" src="https://images.tokopedia.net/img/goldmerchant/pm_activation/badge/Power%20Merchant%20Pro.png" alt="">
                                            </label>
                                            <label class="flex items-center space-x-2">
                                                <input type="checkbox">
                                                <p>Power Merchant</p>
                                                <img class="w-4" src="https://ecs7.tokopedia.net/img/autocomplete/ic_pm.png" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white max-w-xl mx-auto border border-gray-200" x-data="{selected:null}">
                            <ul class="shadow-box py-1">
                                <li class="relative">
                                    <button type="button" class="w-full px-2 py-1 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-bold">Kondisi</span>
                                            <span class="fas fa-angle-down"></span>
                                        </div>
                                    </button>
                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                        <div class="px-4 pb-2 text-sm  text-gray-500">
                                            <label class="flex space-x-2">
                                                <input type="checkbox">
                                                <p>Baru</p>
                                            </label>
                                            <label class="flex space-x-2">
                                                <input type="checkbox">
                                                <p>Bekas</p>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white max-w-xl mx-auto border border-gray-200" x-data="{selected:null}">
                            <ul class="shadow-box py-1">
                                <li class="relative">
                                    <button type="button" class="w-full px-2 py-1 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                        <div class="flex items-center justify-between">
                                            <span class="text-sm font-bold">Lokasi</span>
                                            <span class="fas fa-angle-down"></span>
                                        </div>
                                    </button>
                                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" style="" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                        <div class="px-4 pb-2 text-sm  text-gray-500">
                                            <label class="flex space-x-2">
                                                <input type="checkbox">
                                                <p>Kab. Bantul</p>
                                            </label>
                                            <label class="flex space-x-2">
                                                <input type="checkbox">
                                                <p>Kab. Sleman</p>
                                            </label>
                                            <label class="flex space-x-2">
                                                <input type="checkbox">
                                                <p>Yogyakarta</p>
                                            </label>
                                            <label class="flex space-x-2">
                                                <input type="checkbox">
                                                <p>DKI Jakarta</p>
                                            </label>
                                            <label class="flex space-x-2">
                                                <input type="checkbox">
                                                <p>Jabodetabek</p>
                                            </label>
                                            <a href="#" class="text-blue-400">Lihat selengkapnya</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="py-2">
                            <img src="https://images.tokopedia.net/img/eeIwVI/2021/10/5/cdcc3a86-1e3b-439a-b6a1-1605472ff6d2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-5">
                <div class="mx-4 h-auto">
                    <!-- Tabs -->
                    <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
                        <li class="px-4 py-2 -mb-px font-semibold text-blue-600 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first"><i class="fas fa-briefcase"></i> Produk</a></li>
                        <li class="px-4 py-2 font-semibold text-blue-600 rounded-t opacity-50"><a href="#second"><i class="fas fa-store"></i> Toko</a></li>
                    </ul>

                    <!-- Tab Contents -->
                        <div id="tab-contents">
                            <div id="first" class="py-4">
                                <div class="py-4 grid grid-cols-6 gap-2">
                                    @forelse ($products as $product)
                                        <a href="{{ route('front.product-detail', $product->id) }}" class="col-span-1 shadow-lg rounded-lg text-left ">
                                            <img class="mb-2 w-full h-40 object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                                            <div class="px-2 leading-6 py-2">
                                                <h4 class="text-sm">{{ Str::limit($product->name, 30, '...') }}</h4>
                                                <h3 class="font-bold py-2">Rp {{ number_format($product->price) }}</h3>
                                                <h5 class="text-gray-500 text-xs pb-1">{{ $product->store->address }}</h5>
                                                <h5 class=" text-gray-600 text-xs"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                            </div>
                                        </a>
                                    @empty
                                    <div class="col-span-12">
                                        <h1 class="text-center text-gray-500 text-sm">Maaf produk belum tersedia!</h1>
                                    </div>
                                    @endforelse
                                    
                                </div>
                            </div>
                            <div id="second" class="hidden py-4">
                                <div class="py-4 grid grid-cols-12 gap-2">
                                    @forelse ($stores as $store)
                                        <div class="col-span-4 p-2 shadow-lg rounded-lg text-left ">
                                            <div class="flex space-x-3 items-center">
                                                <img class="mb-2 w-26 h-16 object-cover rounded-full" src="{{ asset('/storage/'.$store->photo) }}">
                                                <div class="">
                                                    <h4 class="text-sm font-bold">{{ $store->name }}</h4>
                                                    <h5 class="text-gray-500 text-xs">Kota Tangerang</h5>   
                                                </div>
                                                <div class="">
                                                    <a href="{{ route('store-show', $store->id) }}" class="font-bold text-blue-400 text-sm py-2 px-4 rounded-lg border-2 border-blue-400">Lihat Toko</a>
                                                </div>
                                            </div>
                                            <div class="flex space-x-2">
                                                @foreach ($products as $product)
                                                    <div class="text-center">
                                                        <img class="mx-auto w-20 h-20 object-cover rounded" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}" alt="">
                                                        <p class="text-yellow-400 font-bold text-sm">Rp. {{ $product->price }}</p>
                                                    </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-span-12">
                                            <h1 class="text-center text-gray-500 text-sm">Maaf toko belum tersedia!</h1>
                                        </div>
                                    @endforelse
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="py-4">
                            <img src="https://images.tokopedia.net/img/WVCyGU/2021/9/25/58f8184e-d016-4614-bc9a-3012670f7e04.jpg" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
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

            tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
        });
        });

        document.getElementById("default-tab").click();
    </script>
@endpush