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
                    <div class="border-2 p-4 space-y-2 w-72">
                        <img class="w-full h-60 object-cover" src="{{ asset('/storage/'.Auth::user()->photo) }}" alt="">
                        <form action="{{ route('profile-changePhoto', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="flex space-x-1">
                                <input name="photo" type="file" class="border-2 rounded w-full p-2" >
                                <button class="bg-blue-400 rounded font-bold text-white px-2">Ubah</button>
                            </div>
                        </form>
                        <button
                            class="border-2 rounded w-full py-2"
                            type="button" onclick="toggleModal('change-Pass')">
                            Ubah kata sandi
                        </button>
                    </div>
                    <div class="p-4">
                        <h1 class="font-bold">Ubah Biodata Diri</h1>
                        <div class="flex text-gray-500">
                            <div class="space-y-6">
                                <p>Nama</p>
                                <p>Tanggal lahir</p>
                                <p>Jenis kelamin</p>
                            </div>
                            <div class=" space-y-6 pl-14">
                                <div class="flex space-x-2">
                                    <p>{{ Auth::user()->name }}</p>
                                    <button
                                        class="text-xs text-blue-400 font-bold"
                                        type="button" onclick="toggleModal('change-name')">
                                        Ubah
                                    </button>
                                </div>
                                <div class="flex space-x-2">
                                    <p>{{ Auth::user()->birth_date }}</p>
                                    <button
                                        class="text-xs text-blue-400 font-bold"
                                        type="button" onclick="toggleModal('change-birthDate')">
                                        Ubah
                                    </button>
                                </div>
                                <p>
                                    @if (Auth::user()->gender == 'L' )
                                        Laki-laki
                                    @else
                                        Perempuan
                                    @endif
                                </p>
                            </div>
                        </div>
                        <h1 class="font-bold pt-4">Ubah Kontak</h1>
                        <div class="flex text-gray-500">
                            <div class="space-y-6">
                                <p>Email</p>
                                <p>Nomor HP</p>
                            </div>
                            <div class=" space-y-6 pl-20">
                                <p>{{ Auth::user()->email }}</p>
                                <p>{{ Auth::user()->phone }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="second" class="hidden p-4">
                <div class="text-right">
                    <button
                        class="py-2 px-4 bg-blue-400 font-bold rounded mb-2 text-white active:bg-blue-600  hover:shadow-md"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Tambah alamat baru
                    </button>
                </div>
                @foreach ($addresses as $address)
                    @if ($address->status == 1)
                        <div class="border-2 border-blue-500 rounded p-4 bg-blue-50 mt-2">
                    @else
                        <div class="border-2 rounded p-4 mt-2">
                    @endif
                        <h2 class="font-semibold">
                            {{ $address->label }}
                            @if ($address->is_default == true)
                                <span class="text-xs py-1 px-2 bg-gray-100 text-blue-400 rounded">Utama</span>
                            @endif
                        </h2>
                        <div class="flex items-center justify-between">
                            <div class="">
                                <h1 class="font-bold text-lg">{{ $address->recipient_name }}</h1>
                                <p>{{ $address->phone }}</p>
                                <p>{{ $address->village->name }}, {{ $address->district->name }}, {{ $address->regency->name }}, {{ $address->province->name }}, {{ $address->zip_code }} [Tokobilu notes: "{{ $address->address_note }}"]</p>
                            </div>
                            <div class="">
                                @if ($address->status == 0)
                                <form action="{{ route('addresses.select', $address->id) }}" method="POST">
                                    @csrf
                                    @method("POST")
                                    <button class="bg-blue-400 rounded text-white px-4 py-2">Pilih</button>
                                </form>
                                @endif
                            </div>
                        </div>
                        <p><i class="fas fa-map-marker-alt"></i> Sudah Pinpoint</p>
                        <div class="flex space-x-2">
                            <a href="{{ route('addresses.edit', $address->id) }}" class="text-blue-400 border-r-2 border-gray-600 pr-2">ubah alamat</a>
                            @if ($address->is_default == 0)
                            <form action="{{ route('addresses.main', $address->id) }}" method="POST">
                                @csrf
                                @method("POST")
                                <button class="text-blue-400 border-r-2 border-gray-600 pr-2">jadikan alamat utama</button>
                            </form>
                            <form action="{{ route('addresses.destroy', $address->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-blue-400">hapus</button>
                            </form>
                            @endif
                        </div>

                    </div>
                @endforeach
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
    <!-- Modal  address-->
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
            <form action="{{ route('addresses.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="p-4" id="locations">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="py-1">
                        <label class="font-bold text-gray-500 text-md">Label Alamat</label>
                        <input name="label" type="text" class="w-full p-2 block border rounded-lg" placeholder="Tulis label alamat">
                    </div>
                    <div class="flex space-x-4">
                        <div class="py-1 w-1/2">
                            <label class="font-bold text-gray-500 text-md">Nama penerima</label>
                            <input name="recipient_name" type="text" class="p-2 w-full border rounded-lg" placeholder="Tulis nama penerima">
                        </div>
                        <div class="py-1 w-1/2">
                            <label class="font-bold text-gray-500 text-md">No. Ponsel</label>
                            <input name="phone" type="text" class="p-2 w-full border rounded-lg" placeholder="Tulis nomor Ponsel">
                        </div>
                    </div>
                    <div class="flex  space-x-4">
                        <div class="py-1 w-1/2">
                            <label class="font-bold text-gray-500 text-md">Provinsi</label>
                            {{-- <input name="province_id" type="text" class="p-2 block border rounded-lg" placeholder="Tulis Kota/Kecamatan"> --}}
                            <select class="p-2 w-full  border-2 rounded"  name="province_id" id="provinces_id" v-if="provinces" v-model="provinces_id">
                                <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                            </select>
                            <select v-else class="form-control"></select>
                        </div>
                        <div class="py-1 w-1/2">
                            <label class="font-bold text-gray-500 text-md">Kabupaten / Kota</label>
                            {{-- <input name="regency_id" type="text" class="p-2 block border rounded-lg" placeholder="Tulis Kota/Kecamatan"> --}}
                            <select class="p-2 w-full  border-2 rounded"  name="regency_id" id="regencies_id" v-if="regencies" v-model="regencies_id">
                                <option v-for="regency in regencies" :value="regency.id">@{{ regency.name }}</option>
                            </select>
                            <select v-else class="form-control"></select>
                        </div>
                    </div>
                    <div class="flex  space-x-4">
                        <div class="py-1 w-1/2">
                            <label class="font-bold text-gray-500 text-md">Kecamatan</label>
                            {{-- <input name="district_id" type="text" class="p-2 block border rounded-lg" placeholder="Tulis Kota/Kecamatan"> --}}
                            <select class="p-2 w-full  border-2 rounded"  name="district_id" id="districts_id" v-if="districts" v-model="districts_id">
                                <option v-for="district in districts" :value="district.id">@{{ district.name }}</option>
                            </select>
                            <select v-else class="form-control"></select>
                        </div>
                        <div class="py-1 w-1/2">
                            <label class="font-bold text-gray-500 text-md">Desa</label>
                            {{-- <input name="village_id" type="text" class="p-2 block border rounded-lg" placeholder="Tulis Kota/Kecamatan"> --}}
                            <select class="p-2 w-full  border-2 rounded"  name="village_id" id="villages_id" v-if="villages" v-model="villages_id">
                                <option v-for="village in villages" :value="village.id">@{{ village.name }}</option>
                            </select>
                            <select v-else class="form-control"></select>
                        </div>
                    </div>
                    <div class="py-1">
                        <label class="font-bold text-gray-500 text-md">Kode pos</label>
                        <input name="zip_code" type="text" class="w-full p-2 block border rounded-lg" placeholder="Tulis kode pos">
                    </div>
                    <div class="py-1">
                        <label class="font-bold text-gray-500 text-md">Catatan Alamat</label>
                        <input type="text" name="address_note" class="w-full p-2 block border rounded-lg" placeholder="Tulis nama jalan, nomor rumah, nomor kompleks, nama gedung">
                    </div>
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
                        type="submit" onclick="toggleModal('modal-example-small')">
                        Tambah
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal  name-->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="change-name">
        <div class="relative w-auto my-6 mx-auto max-w-xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold">
                    Ganti Nama
                </h3>
                <button
                class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                onclick="toggleModal('change-name')">
                <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                    <i class="fas fa-times"></i>
                </span>
                </button>
            </div>
            <form action="{{ route('profile-changeName', Auth::user()->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="p-4 w-96">
                    <label class="font-bold text-gray-700 text-md">Nama Baru</label>
                    <input name="name" type="text" class="w-full p-2 block border rounded-lg text-gray-800" value="{{ Auth::user()->name }}">
                    <p class="text-xs pt-1 text-gray-500">Nama dapat dilihat oleh pengguna lainnya</p>
                </div>
            <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                    <button
                        class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('change-name')">
                        Batal
                    </button>
                    <button
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="submit" onclick="toggleModal('change-name')">
                        simpan
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal  name-->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="change-birthDate">
        <div class="relative w-auto my-6 mx-auto max-w-xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold">
                    Ganti Tanggal Lahir
                </h3>
                <button
                class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                onclick="toggleModal('change-birthDate')">
                <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                    <i class="fas fa-times"></i>
                </span>
                </button>
            </div>
            <form action="{{ route('profile-changeBirth', Auth::user()->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="p-4 w-96">
                    <label class="font-bold text-gray-700 text-md">Tanggal Lahir</label>
                    <input name="birth_date" type="date" class="w-full p-2 block border rounded-lg text-gray-800" value="{{ Auth::user()->birth_date }}">
                    <p class="text-xs pt-1 text-gray-500">Tangal lahir dapat dilihat oleh pengguna lainnya</p>
                </div>
            <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                    <button
                        class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('change-birthDate')">
                        Batal
                    </button>
                    <button
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="submit" onclick="toggleModal('change-birthDate')">
                        simpan
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal  photo-->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="change-Pass">
        <div class="relative w-auto my-6 mx-auto max-w-xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold">
                    Ganti Kata Sandi
                </h3>
                <button
                class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                onclick="toggleModal('change-Pass')">
                <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                    <i class="fas fa-times"></i>
                </span>
                </button>
            </div>
            <form action="{{ route('profile-changePass', Auth::user()->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="p-4 w-96">
                    <label class="font-bold text-gray-700 text-md">Masukkan Kata Sandi Baru</label>
                    <input name="password" type="password" class="w-full p-2 block border rounded-lg text-gray-800">
                    {{-- <p class="text-xs pt-1 text-gray-500">Tangal lahir dapat dilihat oleh pengguna lainnya</p> --}}
                </div>
            <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                    <button
                        class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('change-Pass')">
                        Batal
                    </button>
                    <button
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="submit" onclick="toggleModal('change-Pass')">
                        simpan
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
    

    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-small-backdrop"></div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="change-name-backdrop"></div>

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
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    var locations = new Vue({
        el: "#locations",
        mounted() {
            this.getProvincesData();
            this.getRegenciesData();
            this.getDistrictsData();
            this.getVillagesData();
        },
        data: {
        provinces: null,
        regencies: null,
        districts: null,
        villages: null,
        provinces_id: null,
        regencies_id: null,
        districts_id: null,
        villages_id: null,
        },
        methods: {
        getProvincesData() {
            var self = this;
            axios.get('{{ route('api-provinces') }}')
            .then(function (response) {
                self.provinces = response.data;
            })

        },
        getRegenciesData() {
            var self = this;
            axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
            .then(function (response) {
                self.regencies = response.data;
            })
        },
        getDistrictsData() {
            var self = this;
            axios.get('{{ url('api/districts') }}/' + self.regencies_id)
            .then(function (response) {
                self.districts = response.data;
            })
        },
        getVillagesData() {
            var self = this;
            axios.get('{{ url('api/villages') }}/' + self.districts_id)
            .then(function (response) {
                self.villages = response.data;
            })

        },
        },
        watch: {
        provinces_id: function (val, oldVal) {
            this.regencies_id = null;
            this.getRegenciesData();
        },
        regencies_id: function (val, oldVal) {
            this.districts_id = null;
            this.getDistrictsData();
        },
        districts_id: function (val, oldVal) {
            this.villages_id = null;
            this.getVillagesData();
        },
        // villages_id: function (val, oldVal) {
            // this.regenc_id = null;
            // this.getRData();
        // },
        }
    });
    </script>
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