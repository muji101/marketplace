@extends('pages.front.profile.app')

@push('content')
<div class="px-2 border-2 rounded-lg ml-2">
    <form action="{{ route('addresses.update', $addresses->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="p-4" id="locations">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <div class="py-1">
                <label class="font-bold text-gray-500 text-md">Label Alamat</label>
                <input name="label" type="text" class="w-full p-2 block border rounded-lg" placeholder="Tulis label alamat" value="{{ $addresses->label }}">
            </div>
            <div class="flex space-x-4">
                <div class="py-1 w-1/2">
                    <label class="font-bold text-gray-500 text-md">Nama penerima</label>
                    <input name="recipient_name" type="text" class="p-2 w-full border rounded-lg" placeholder="Tulis nama penerima" value="{{ $addresses->recipient_name }}">
                </div>
                <div class="py-1 w-1/2">
                    <label class="font-bold text-gray-500 text-md">No. Ponsel</label>
                    <input name="phone" type="text" class="p-2 w-full border rounded-lg" placeholder="Tulis nomor Ponsel" value="{{ $addresses->phone }}">
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
                <input name="zip_code" type="text" class="w-full p-2 block border rounded-lg" placeholder="Tulis kode pos" value="{{ $addresses->zip_code }}">
            </div>
            <div class="py-1">
                <label class="font-bold text-gray-500 text-md">Catatan Alamat</label>
                <input type="text" name="address_note" class="w-full p-2 block border rounded-lg" value="{{ $addresses->address_note }}">
            </div>
        </div>
    <!--footer-->
        <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
            <a href="{{ url()->previous() }}"
                class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                >
                Batal
            </a>
            <button
                class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                type="submit" onclick="toggleModal('modal-example-small')">
                Update
            </button>
        </div>
    </form>
</div>
@endpush

@push('after-style')
<style>
    .scrollbar-w-2::-webkit-scrollbar {
        width: 0.25rem;
        height: 0.25rem;
    }
    
    .scrollbar-track-blue-lighter::-webkit-scrollbar-track {
        --bg-opacity: 1;
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--bg-opacity));
    }
    
    .scrollbar-thumb-blue::-webkit-scrollbar-thumb {
        --bg-opacity: 1;
        background-color: #edf2f7;
        background-color: rgba(237, 242, 247, var(--bg-opacity));
    }
    
    .scrollbar-thumb-rounded::-webkit-scrollbar-thumb {
        border-radius: 0.25rem;
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
        }
    });
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

        tabTogglers[i].parentElement.classList.remove();  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
            continue;
        }
        tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add();
    });
    });

    document.getElementById("default-tab").click();
</script>
<script>
    const el = document.getElementById('messages')
    el.scrollTop = el.scrollHeight
</script>
@endpush