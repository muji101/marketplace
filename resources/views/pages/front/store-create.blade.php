@extends('layouts.app')

@section('content')
<div class="md:p-16 bg-blue-100 flex flex-row flex-wrap">
    <form action="{{ route('store-store') }}" method="POST" enctype="multipart/form-data" class="md:w-1/2-screen m-0 p-16 bg-white w-full tw-h-full shadow md:rounded-lg">
        @csrf
        @method('POST')
        
        <input type="hidden" value="{{ Auth::user()->id }}">
        <div class="text-2xl text-blue-900 font-bold">
            Buka Toko 
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Nama Toko</label>
            <input name="name" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="Ketikkan Nama Toko">
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Slogan Toko</label>
            <input name="slogan" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="Ketikkan Slogan Toko">
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Deskripsi Toko </label>
            <input name="description" type="text" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200" placeholder="Ketikkan Deskripsi Toko">
        </div>
        
        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Foto Toko</label>
            <input name="photo" type="file" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200">
        </div>

        <div class="flex-col flex py-3">
            <label class="pb-2 text-gray-700 font-semibold">Cover Toko</label>
            <input name="cover" type="file" class="p-2 shadow rounded-lg bg-gray-100 outline-none focus:bg-gray-200">
        </div>

        <div class="flex  space-x-4" id="locations">
            <div class="py-1 w-1/2">
                <label class="font-bold text-gray-500 text-md">Provinsi</label>
                {{-- <input name="province_id" type="text" class="p-2 block border rounded-lg" placeholder="Tulis Kota/Kecamatan"> --}}
                <select class="p-2 w-full  border-2 rounded"  id="provinces_id" v-if="provinces" v-model="provinces_id">
                    <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                </select>
                <select v-else class="form-control"></select>
            </div>
            <div class="py-1 w-1/2">
                <label class="font-bold text-gray-500 text-md">Kabupaten / Kota</label>
                {{-- <input name="regency_id" type="text" class="p-2 block border rounded-lg" placeholder="Tulis Kota/Kecamatan"> --}}
                <select class="p-2 w-full  border-2 rounded"  name="address" id="regencies_id" v-if="regencies" v-model="regencies_id">
                    <option v-for="regency in regencies" :value="regency.name">@{{ regency.name }}</option>
                </select>
                <select v-else class="form-control"></select>
            </div>
        </div>

        <div class="mt-2">
            <button class="p-3 bg-blue-400 text-white w-full hover:bg-blue-300">Buka Toko</button>
        </div>
    </form>
</div>
@endsection

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
@endpush

