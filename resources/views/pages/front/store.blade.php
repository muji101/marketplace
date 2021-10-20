@extends('layouts.app')

@section('content')
    <div class="py-10 mx-32">
        <div class="flex justify-around items-center shadow-lg py-4 my-4 border-2 rounded-lg p-4-lg">
                <div class="flex items-center">
                    <img class="w-24 h-24" src="https://images.tokopedia.net/img/seller_no_logo_3.png" alt="">
                    <div class="text-left">
                        <h1 class="font-bold text-lg">onotokoqu</h1>
                        <h1 class="py-2">Dibalas -+ 1 menit | <i class="fas fa-map-marker-alt"></i> Kab. Batang</h1>
                        <button
                            class="py-1 px-4 border-2 rounded-lg p-4-lg" ype="button" onclick="toggleModal('modal-example-small')">
                            Info toko
                        </button>
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
                    <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-red-400 rounded-t opacity-50"><a id="default-tab" href="#first">Produk</a></li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Ulasan</a></li>
                </ul>
        
            <!-- Tab Contents -->
                <div id="tab-contents">
                    <div id="first">
                        <div class="grid grid-cols-4">
                            <div class="col-span-1">
                                <div class="shadow-lg border-2 rounded-lg p-4-lg p-4 mt-2 sticky top-32">
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
                                            <button class="bg-red-400 rounded-lg py-2 px-4 text-white">Tambah Produk</button>
                                        </div>
                                    </div> --}}
                                    <div class="flex flex-wrap gap-2">
                                        <a href="/product" class="p-2 border-2 rounded-lg p-4-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg p-4-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg p-4-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg p-4-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg p-4-lg w-56">
                                            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                                            <p class="text-xs text-yellow-500 font-bold">Produk terbaru</p>
                                            <p>Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</p>
                                            <p class="font-bold text-base">Rp 2.000</p>
                                        </a>
                                        <a href="/product" class="p-2 border-2 rounded-lg p-4-lg w-56">
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
                    <div id="second" class="hidden border-2 rounded-lg p-4 mt-2">
                        {{-- <div class="border-b-2 flex justify-between p-2 bg-gray-100">
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
                        </div> --}}

                        <div class="grid grid-cols-10 p-2">
                            <div class="col-span1">
                                <div class="p-2 border-2">
                                    <img src="https://ecs7.tokopedia.net/img/cache/100-square/product-1/2019/11/13/7766400/7766400_bc88909b-f9ab-44a1-89fa-b2beb8f0fa67_690_690.webp" alt="">
                                </div>
                                <p class="text-red-400 font-bold uppercase p-2 text-md">Tp-link TL WN725N : 150Mbps Wireless N Nano USB Adapter N USB Wifi</p>
                            </div>
                            <div class="col-span-9 border-l-2 ml-2 p-2">
                                <div class="">
                                    <div class="flex items-center space-x-2">
                                        <span><img class="w-6" src="https://ecs7.tokopedia.net/img/cache/100-square/default_picture_user/default_toped-13.jpg" alt=""></span>
                                        <span class="font-bold text-xs text-red-500">Rudi</span>
                                        <span class="text-xs bg-blue-400 rounded text-white py-1 px-2 font-bold">Pembeli</span>
                                        <span class="text-gray-500 text-xs">04 Sep 2021, 19:03 WIB</span>
                                    </div>
                                    <p class="py-2">
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                    </p>
                                    <p class="text-gray-500">terimakasih kak</p>
                                </div>
                                <div class="mt-2 border-t-2 py-2 bg-gray-100 p-2">
                                    <div class="flex items-center space-x-2 py-1">
                                        <span><img class="w-6" src="https://images.tokopedia.net/img/cache/215-square/shops-1/2014/9/5/1441677/1441677_297c9bc2-34eb-11e4-8dfe-d9e74908a8c2.jpg" alt=""></span>
                                        <span class="font-bold text-xs text-red-500">herbalonlineYK</span>
                                        <span class="text-xs bg-red-400 rounded text-white py-1 px-2 font-bold">Penjual</span>
                                        <span class="text-gray-500 text-xs">12 Oct 2021, 14:07 WIB</span>
                                    </div>
                                    <p class="text-gray-500">Terima kasih telah berbelanja di herbalonlineYK. Bagikan link toko kami www.tokopedia.com/herbalonlineyk kepada teman-teman kamu. Jangan lupa follow toko kami untuk tahu update terbaru tentang stok dan produk yang kami tawarkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-example-small">
        <div class="relative w-auto my-6 mx-auto max-w-6xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold">
                    Info Toko
                </h3>
                <button
                class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                onclick="toggleModal('modal-example-small')">
                <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                    <i class="fas fa-times"></i>
                </span>
                </button>
            </div>
            <div class="p-4">
                <form action="#">
                    <div class="grid grid-cols-4">
                        <div class="col-span-1">
                            <div class="py-2">
                                <label class="font-bold text-gray-500 text-md">Deskripsi Toko</label>
                                <p class="text-gray-800">HerbalOnline merupakan toko online yang sudah beroperasi sejak tahun 2007.</p>
                            </div>
                            <div class="py-2">
                                <label class="font-bold text-gray-500 text-md">Alamat Toko</label>
                                <p class="text-gray-800">No shop location yet</p>
                            </div>
                            <div class="py-2">
                                <label class="font-bold text-gray-500 text-md">Buka Sejak</label>
                                <p class="text-gray-800">September 2014</p>
                            </div>
                        </div>
                        <div class="col-span-3 pl-4">
                            <h1 class="font-bold py-2">Layanan Pengiriman</h1>
                            <div class="flex flex-wrap gap-4">
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-indopaket.png" alt="Indo Paket">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">Indo Paket</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs">  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-gosend.png" alt="GoSend">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">GoSend</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Same Day, Instant Courier </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-sicepat.png" alt="SiCepat">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">SiCepat</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Regular Package, BEST, GOKIL, HALU </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-custom.png" alt="Custom Logistik">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">Custom Logistik</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Service Normal </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-jnt.png" alt="J&amp;T">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">J&amp;T</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Reguler </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-anteraja.png" alt="AnterAja">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">AnterAja</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Reguler, Next Day, Same Day, Economy, Cargo </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-jne.png" alt="JNE">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">JNE</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Reguler, OKE, YES, JNE Trucking </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-grab.png" alt="GrabExpress">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">GrabExpress</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Same Day, Instant </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--footer-->
                {{-- <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                    <button
                        class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Batal
                    </button>
                    <button
                        class="bg-red-500 text-white active:bg-red-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Tambah
                    </button>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-small-backdrop"></div>
@endsection


@push('after-script')
    <script type="text/javascript">
        function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>

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

            tabTogglers[i].parentElement.classList.remove("border-red-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-red-400", "border-b-4", "-mb-px", "opacity-100");
        });
        });

        document.getElementById("default-tab").click();
    </script>
@endpush
