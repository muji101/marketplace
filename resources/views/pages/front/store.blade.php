@extends('layouts.app')

@section('content')
    <div class="py-10 mx-32">
        <div class="flex justify-around items-center shadow-lg py-4 my-4 border-2 rounded-lg">
                <div class="flex items-center">
                    <img class="w-24 h-24" src="https://images.tokopedia.net/img/seller_no_logo_3.png" alt="">
                    <div class="text-left">
                        <h1 class="font-bold text-lg">onotokoqu</h1>
                        <h1 class="py-2">Dibalas -+ 1 menit | <i class="fas fa-map-marker-alt"></i> Kab. Batang</h1>
                        <button class="py-1 px-4 border-2 rounded-lg">Info toko</button>
                    </div>
                </div>
            <div class="">
                <p>Nilai Kualitas Produk</p>
                <div class="text-gray-500">
                    0.0
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        <div class="mx-4 h-auto">
            <!-- Tabs -->
                <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
                    <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-green-400 rounded-t opacity-50"><a id="default-tab" href="#first">Produk</a></li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Ulasan</a></li>
                </ul>
        
            <!-- Tab Contents -->
                <div id="tab-contents">
                    <div id="first">
                        <div class="grid grid-cols-4">
                            <div class="col-span-1">
                                <div class="shadow-lg border-2 rounded-lg p-4 mt-2 sticky top-32">
                                    <h1 class="text-lg text-left font-bold">Etalase Toko (2)</h1>
                                    <div class="text-left text-gray-600 space-y-2">
                                            <button class="text-left pl-4 bg-gray-200 rounded-lg py-2 w-full font-bold" href="#">Semua Produk</button>
                                            <button class="text-left pl-4 bg-gray-200 rounded-lg py-2 w-full" href="#">Produk Terjual</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3">
                                <div class="p-4 text-left">
                                    <h1 class="font-bold">Semua Produk</h1>
                                    {{-- <div class="flex space-x-4 my-2">
                                        <img class="w-48" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/a959bb5d.png" alt="">
                                        <div class="">
                                            <h2>Toko Anda belum memiliki produk</h2>
                                            <h4 class="text-sm text-gray-500 py-2">Yuk, isi tokomu dengan produk unggulan!</h4>
                                            <button class="bg-green-400 rounded-lg py-2 px-4 text-white">Tambah Produk</button>
                                        </div>
                                    </div> --}}
                                    <div class="flex flex-wrap gap-2">
                                        <a href="/product" class="p-2 border-2 rounded-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="second" class="hidden border-2 rounded mt-2">
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


@push('after-script')
    <script>
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                    setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
            }
            };
        }
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

            tabTogglers[i].parentElement.classList.remove("border-green-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-green-400", "border-b-4", "-mb-px", "opacity-100");
        });
        });

        document.getElementById("default-tab").click();
    </script>
@endpush
