@extends('pages.front.profile.app')

@push('content')
<div class="mx-4 h-auto p-4 border-2 rounded-lg">
    <!-- Tabs -->
        <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
            <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-green-400 rounded-t opacity-50"><a id="default-tab" href="#first">Biodata Diri</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Daftar Alamat</a></li>
            {{-- <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Pembayaran</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fourth">Rekening Bank</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#five">Notifikasi</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#six">Keamanan</a></li> --}}
        </ul>

    <!-- Tab Contents -->
        <div id="tab-contents">
            <div id="first" class="p-4">
                <div class="flex">
                    <div class="border-2 p-4 space-y-2">
                        <img src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                        <button href="" class="border-2 rounded w-full py-2" >Pilih file</button>
                        <button href="" class="border-2 rounded w-full py-2" >Ubah kata sandi</button>
                    </div>
                    <div class="p-4">
                        <h1 class="font-bold">Ubah Biodata Diri</h1>
                        <div class="flex text-gray-500">
                            <div class="space-y-6">
                                <p>Nama</p>
                                <p>Tanggal lahir</p>
                                <p>Jenis kelamin</p>
                            </div>
                            <div class=" space-y-6 pl-12">
                                <p>Muji kuwat</p>
                                <p>2 Juli 2000</p>
                                <p>Pria</p>
                            </div>
                        </div>
                        <h1 class="font-bold pt-4">Ubah Kontak</h1>
                        <div class="flex text-gray-500">
                            <div class="space-y-6">
                                <p>Email</p>
                                <p>Nomor HP</p>
                            </div>
                            <div class=" space-y-6 pl-12">
                                <p>mujikuwat91@gmail.com</p>
                                <p>6285747245474</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="second" class="hidden p-4">
                <div class="text-right">
                    <button class="py-2 px-4 bg-green-400 font-bold rounded mb-2 text-white">Tambah alamat baru</button>
                </div>
                <div class="border-2 border-green-500 rounded p-4 bg-green-50">
                    <h2 class="font-semibold">Rumah</h2>
                    <h1 class="font-bold text-lg">Muji Kuwat</h1>
                    <p>6285747245474</p>
                    <p>Ds. wonosari Rt 6 Rw 3 no rumah 21</p>
                    <p><i class="fas fa-map-marker-alt"></i> Sudah Pinpoint</p>
                    <button class="text-green-400">ubah alamat</button>
                </div>
                <div class="border-2 rounded p-4 mt-2">
                    <h2 class="font-semibold">Pondok</h2>
                    <div class="flex items-center justify-between">
                        <div class="">
                            <h1 class="font-bold text-lg">Muji</h1>
                            <p>6285747245474</p>
                            <p>Pondok IT Al Madinah, Kabupaten Sleman, Jogja, 55584[Tokopedia notes: Pondok IT Al Madinah]</p>
                        </div>
                        <div class="">
                            <button class="bg-green-400 rounded text-white px-4 py-2">Pilih</button>
                        </div>
                    </div>
                    <p><i class="fas fa-map-marker-alt"></i> Sudah Pinpoint</p>
                    <div class="">
                        <button class="text-green-400">ubah alamat</button> |
                        <button class="text-green-400">jadikan alamat utama</button> |
                        <button class="text-green-400">hapus</button>
                    </div>

                </div>
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
@endpush

@push('after-style')
<style>
    .tab-content {
    max-height: 0;
    -webkit-transition: max-height .35s;
    -o-transition: max-height .35s;
    transition: max-height .35s;
    }
    /* :checked - resize to full height */
    .tab input:checked ~ .tab-content {
    max-height: 100vh;
    }
    /* Label formatting when open */
    .tab input:checked + label{
    /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
    font-size: 1.25rem; /*.text-xl*/
    padding: 1.25rem; /*.p-5*/
    border-left-width: 2px; /*.border-l-2*/
    border-color: #65cd8d; /*.border-indigo*/
    background-color: #f8fafc; /*.bg-gray-100 */
    color: #65cd8d; /*.text-indigo*/
    }
    /* Icon */
    .tab label::after {
    float:right;
    right: 0;
    top: 0;
    display: block;
    width: 1.5em;
    height: 1.5em;
    line-height: 1.5;
    font-size: 1.25rem;
    text-align: center;
    -webkit-transition: all .35s;
    -o-transition: all .35s;
    transition: all .35s;
    }
    /* Icon formatting - closed */
    .tab input[type=checkbox] + label::after {
    content: "+";
    font-weight:bold; /*.font-bold*/
    border-width: 1px; /*.border*/
    border-radius: 9999px; /*.rounded-full */
    border-color: #b8c2cc; /*.border-grey*/
    }
    .tab input[type=radio] + label::after {
    content: "\25BE";
    font-weight:bold; /*.font-bold*/
    border-width: 1px; /*.border*/
    border-radius: 9999px; /*.rounded-full */
    border-color: #b8c2cc; /*.border-grey*/
    }
    /* Icon formatting - open */
    .tab input[type=checkbox]:checked + label::after {
    transform: rotate(315deg);
    background-color: #65cd8d; /*.bg-indigo*/
    color: #f8fafc; /*.text-grey-lightest*/
    }
    .tab input[type=radio]:checked + label::after {
    transform: rotateX(180deg);
    background-color: #65cd8d; /*.bg-indigo*/
    color: #f8fafc; /*.text-grey-lightest*/
    }
 </style>
@endpush

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