@extends('layouts.dash')

@section('title', 'Sales')
    
@section('content')

@include('includes.back.topbar')
<div class="h-auto mt-4 p-4 border-2 rounded-lg">
    <h1 class="font-bold text-lg">Daftar Pesanan</h1>
    <!-- Tabs -->
        <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
            <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-green-400 rounded-t opacity-50"><a id="default-tab" href="#first">Semua Pesanan</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Pesanan Baru</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Siap Dikirim</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fourth">Dalam Pengiriman</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#five">Pesanan Selesai</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#six">Dibatalkan</a></li>
        </ul>

    <!-- Tab Contents -->
        <div id="tab-contents">
            <div id="first" class="mt-2">
            <div class="border-2 rounded">
                <div class="bg-gray-300 p-4 rounded">
                    <span class="font-bold">INV/20210706/MPL/1385205190</span>
                    <span class="font-semibold">(Jhon Due)</span>
                    <span class="text-gray-600">12 Oktober 2021</span>
                    <span class="px-2 py-1 text-sm font-bold bg-gray-100">Pesanan Baru</span>
                </div>
                <div class="flex p-2">
                    <div class="flex">
                        <span>
                            <img src="https://images.tokopedia.net/img/cache/100-square/product-1/2020/7/11/48690432/48690432_73f8cf51-8be9-4323-8850-0df7f71abfc8_800_800.webp?ect=4g" alt="">
                        </span>
                        <span class="px-4">
                            <p class="font-bold">Korek Api Kompor - Lighter Pemantik Kompor Gas</p>
                            <p>1 produk (0,5 kg) @ Rp2.000</p>
                        </span>
                    </div>
                    <div class="px-4 border-l-2">
                        <h2 class="font-bold pb-2">Alamat</h2>
                        <p>
                            Jhon Due
                            jalan raya krapyak wedomartani ngemplak sleman
                        </p>
                        <h2 class="font-bold py-2">Kode Boking</h2>
                        <p>
                            Terima pesanan terlebih dahulu
                        </p>
                    </div>
                    <div class="px-4 border-l-2">
                        <h2 class="font-bold">Kurir</h2>
                        <p>Sicepat reguler</p>
                        <a href="#" class="font-bold">Info penting</a>
                    </div>
                    <div class="px-4 border-l-2">
                        <h2 class="font-bold">Total Harga (1 Barang)</h2>
                        <h1 class="text-2xl font-bold">Rp2.000</h1>
                    </div>
                </div>
            </div>
            </div>
            <div id="second" class="hidden p-4">
            </div>
            {{-- <div id="third" class="hidden p-4">
                Third tab
            </div>
            <div id="fourth" class="hidden p-4">
                Fourth tab
            </div>
            <div id="five" class="hidden p-4">
                Five tab
            </div>
            <div id="six" class="hidden p-4">
                Six tab
            </div> --}}
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