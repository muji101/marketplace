@extends('layouts.dash')

@section('title', 'User Create')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            User Create
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <form action=""  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="">
                        <label for="crud-form-1" class="form-label">Photo Profile</label>
                        <div data-single="true" action="/file-upload" class="dropzone">
                            <div class="fallback"> <input name="file" type="file" /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Name</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Name">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Email</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Email">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Password</label>
                        <input id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Confirmation Password</label>
                        <input id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Phone</label>
                        <input id="crud-form-1" type="text" class="form-control w-full" placeholder="+62">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Gender</label>
                        <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                            <option value="1">Laki-laki</option>
                            <option value="2">Perempuan</option>
                        </select> 
                    </div>
                    <div   id="locations" class="mt-3">
                        <label class="form-label">Address</label>
                        <div class="sm:grid grid-cols-3 gap-2">
                            <div class="input-group">
                                <div class="flex w-full">
                                    <div id="input-group-3" class="z-30 rounded-l flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1 p-2">Province</div> 
                                    <select class="tom-select px-2 w-full"  name="provinces_id" id="provinces_id" v-if="provinces" v-model="provinces_id">
                                        <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                {{-- <div id="input-group-4" class="input-group-text">Regency</div>
                                <input type="text" class="form-control" placeholder="Regency" aria-describedby="input-group-4"> --}}
                                <div class="flex w-full">
                                    <div id="input-group-3" class="z-30 rounded-l flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1 p-2">Regency</div> 
                                    <select class="tom-select px-2 w-full"  name="regencies_id" id="regencies_id" v-if="regencies" v-model="regencies_id">
                                        <option v-for="regency in regencies" :value="regency.id">@{{ regency.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div id="input-group-3" class="z-30 rounded-l flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1 p-2">District</div> 
                                    <select class="tom-select px-2 w-full"  name="districts_id" id="districts_id" v-if="districts" v-model="districts_id">
                                        <option v-for="district in districts" :value="district.id">@{{ district.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div id="input-group-3" class="z-30 rounded-l flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1 p-2">Village</div> 
                                    <select class="tom-select px-2 w-full"  name="villages_id" id="villages_id" v-if="villages" v-model="villages_id">
                                        <option v-for="village in villages" :value="village.id">@{{ village.name }}</option>
                                    </select>
                                    <select v-else class="form-control"></select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text">Zipcode</div>
                                <input type="text" class="form-control" placeholder="Zip Code" aria-describedby="input-group-5">
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text">Country</div>
                                <input type="text" class="form-control" placeholder="Country" aria-describedby="input-group-5">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Role</label>
                            <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="superadmin">SuperAdmin</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select> 
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-primary w-24">Save</button>
                    </div>
                </form>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection

@push('after-script')
    {{-- <script src="/vendor/vue/vue.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    var locations = new Vue({
        el: "#locations",
        mounted() {
            this.getProvincesData();
            this.getRegenciesData();
            this.getDistrictsData();
            this.getVillageData();
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
        getVillageData() {
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
        // distrcits_id: function (val, oldVal) {
        //     this.villages_id = null;
        //     this.getVillagesData();
        // },
        // villages_id: function (val, oldVal) {
            // this.regenc_id = null;
            // this.getRData();
        // },
        }
    });
    </script>
@endpush