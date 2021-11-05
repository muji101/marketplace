@extends('pages.front.profile.app')

@push('content')
<div class="mx-4 h-auto p-4 border-2 rounded-lg">
    <!-- Tabs -->
        <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
            <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">Biodata Diri</a></li>
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
                    {{-- <button class="py-2 px-4 bg-blue-400 font-bold rounded mb-2 text-white">Tambah alamat baru</button> --}}
                    <button
                        class="py-2 px-4 bg-blue-400 font-bold rounded mb-2 text-white active:bg-blue-600  hover:shadow-md"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Tambah alamat baru
                    </button>
                </div>
                <div class="border-2 border-blue-500 rounded p-4 bg-blue-50">
                    <h2 class="font-semibold">Rumah</h2>
                    <h1 class="font-bold text-lg">Muji Kuwat</h1>
                    <p>6285747245474</p>
                    <p>Ds. wonosari Rt 6 Rw 3 no rumah 21</p>
                    <p><i class="fas fa-map-marker-alt"></i> Sudah Pinpoint</p>
                    <button class="text-blue-400">ubah alamat</button>
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
                            <button class="bg-blue-400 rounded text-white px-4 py-2">Pilih</button>
                        </div>
                    </div>
                    <p><i class="fas fa-map-marker-alt"></i> Sudah Pinpoint</p>
                    <div class="">
                        <button class="text-blue-400">ubah alamat</button> |
                        <button class="text-blue-400">jadikan alamat utama</button> |
                        <button class="text-blue-400">hapus</button>
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
<!-- Button trigger modal -->
    {{-- <button
        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
        type="button" onclick="toggleModal('modal-example-small')">
        Open small modal
    </button> --}}
    <!-- Modal -->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-example-small">
        <div class="relative w-auto my-6 mx-auto max-w-xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold">
                    Tambah alamat baru
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
                    <div class="py-1">
                        <label class="font-bold text-gray-500 text-md">Label Alamat</label>
                        <input type="text" class="w-full p-2 block border rounded-lg" placeholder="Tulis label alamat">
                    </div>
                    <div class="flex space-x-4">
                        <div class="py-1">
                            <label class="font-bold text-gray-500 text-md">Nama penerima</label>
                            <input type="text" class="p-2 block border rounded-lg" placeholder="Tulis nama penerima">
                        </div>
                        <div class="py-1">
                            <label class="font-bold text-gray-500 text-md">No. Ponsel</label>
                            <input type="text" class="p-2 block border rounded-lg" placeholder="Tulis nomor Ponsel">
                        </div>
                    </div>
                    <div class="flex  space-x-4">
                        <div class="py-1">
                            <label class="font-bold text-gray-500 text-md">Kota atau Kecamatan</label>
                            <input type="text" class="p-2 block border rounded-lg" placeholder="Tulis Kota/Kecamatan">
                        </div>
                        <div class="py-1">
                            <label class="font-bold text-gray-500 text-md">Kode pos</label>
                            <input type="text" class="p-2 block border rounded-lg" placeholder="Tulis kode pos">
                        </div>
                    </div>
                    <div class="py-1">
                        <label class="font-bold text-gray-500 text-md">Alamat</label>
                        <input type="text" class="w-full p-2 block border rounded-lg" placeholder="Tulis nama jalan, nomor rumah, nomor kompleks, nama gedung, lantai atau nomor unit">
                    </div>
                </form>
            </div>
            <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                    <button
                        class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Batal
                    </button>
                    <button
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Tambah
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-small-backdrop"></div>

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