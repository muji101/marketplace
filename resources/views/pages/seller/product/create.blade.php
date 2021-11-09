@extends('layouts.sell')

@section('title', 'Product Create')

@section('content')
    <div class="p-4">
        <h1 class="font-bold text-lg pb-2">Tambah Produk</h1>
        <form action="{{ route('seller.product-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="p-4 bg-white rounded-lg shadow">
                <h2 class="font-bold">Upload Produk</h2>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="store_id" value="{{ Auth::user()->store->id }}">
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Foto Produk <span class="text-xs text-gray-500">wajib</span>
                        <p class="text-sm py-1 text-gray-500">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px).</p>
                        <p class="text-sm py-1 text-gray-500">Pilih foto produk atau tarik dan letakkan hingga 5 foto sekaligus di sini. Cantumkan min. 3 foto yang menarik agar produk semakin menarik pembeli.</p>
                    </div>
                    <div class="col-span-3 pl-20">
                        <input type="file" name="photo">
                        {{-- <input type="file" name="photo[]">
                        <input type="file" name="photo[]"> --}}
                        {{-- <p class="text-gray-500">Kamu dapat memilih lebih dari foto</p> --}}
                        {{-- <div class="flex px-4 space-x-4">
                            <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-blue-400">foto 1</div>
                            <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-blue-400">foto 2</div>
                            <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-blue-400">foto 3</div>
                            <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-blue-400">foto 4</div>
                        </div> --}}

                    </div>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow mt-4">
                <h2 class="font-bold">Informasi Produk</h2>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Nama Produk <span class="text-xs text-gray-500">wajib</span>
                        <p class="text-sm py-1 text-gray-500">
                            Wajib Cantumkan min. 40 karakter agar semakin menarik dan mudah ditemukan oleh pembeli, terdiri dari jenis produk, merek, dan keterangan seperti warna, bahan, atau tipe.
                        </p>
                    </div>
                    <div class="col-span-3 pl-20">
                        <input name="name" type="text" class="p-2 rounded w-full border-2" placeholder="Contoh: Sepatu Pria (Jenis/Kategori Produk) + Tokostore (Merek) + Kanvas Hitam (Keterangan)">
                    </div>
                </div>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Kategori Produk <span class="text-xs text-gray-500">wajib</span>
                    </div>
                    <div class="col-span-3 pl-20">
                        {{-- <input type="hidden" name="category_id" value="{{ $category->category->id }}"> --}}
                        <div class="flex" id="categories">
                            <div>
                                <label>Kategori</label>
                                <select class="border-2 p-2 rounded w-96"  name="category_id" id="categories_id" v-if="categories" v-model="categories_id">
                                    <option v-for="category in categories" :value="category.id">@{{ category.name }}</option>
                                </select>
                                <select v-else class="form-control"></select>
                            </div>
                            <div>
                                <label>Sub Kategori</label>
                                <select class="border-2 p-2 rounded w-96"  name="subcategory_id" id="subcategories_id" v-if="subcategories" v-model="subcategories_id">
                                    <option v-for="subcategory in subcategories" :value="subcategory.id">@{{ subcategory.name }}</option>
                                </select>
                                <select v-else class="form-control"></select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow mt-4">
                <h2 class="font-bold">Detail Produk</h2>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Kondisi Produk
                    </div>
                    <div class="col-span-3  pl-20">
                        <select name="condition" class="form-select block w-full mt-1 border-2 p-2">
                            <option value="1" selected>Baru</option>
                            <option value="2">Bekas</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Deskripsi Produk
                        <p class="text-sm py-1 text-gray-500">
                            Wajib Cantumkan min. 40 karakter agar semakin menarik dan mudah ditemukan oleh pembeli, terdiri dari jenis produk, merek, dan keterangan seperti warna, bahan, atau tipe.
                        </p>
                    </div>
                    <div class="col-span-3  pl-20">
                        <textarea name="description" id="" class="w-full border-2 p-2 rounded-lg text-xs h-60" 
                        placeholder="Sepatu Sneakers Pria Tokostore Kanvas Hitam Seri C28B
    
- Model simple
- Nyaman Digunakan
- Tersedia warna hitam

Bahan:
Upper: Semi Leather (kulit tidak pecah-pecah)

Ukuran
39 : 25,5 cm
40 : 26 cm
41 : 26.5 cm"
                        ></textarea>
                    </div>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow mt-4">
                <h2 class="font-bold">Harga</h2>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Minimum Pemesanan
                        <p class="text-sm py-1 text-gray-500">Atur jumlah minimum yang harus dibeli untuk produk ini..</p>
                    </div>
                    <div class="col-span-3  pl-20">
                        <input type="text" class="p-2 rounded w-full border-2" value="1" disabled>
                    </div>
                </div>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Harga Satuan <span class="text-xs text-gray-500">wajib</span>
                    </div>
                    <div class="col-span-3  pl-20">
                        <input name="price" type="number" class="p-2 rounded w-full border-2" placeholder="Masukkan harga">
                    </div>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow mt-4">
                <h2 class="font-bold">Pengelolaan Produk</h2>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Status Produk
                        <p class="text-sm py-1 text-gray-500">Jika status aktif, produkmu dapat dicari oleh calon pembeli.</p>
                    </div>
                    <div class="col-span-3 pl-20">
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input name="status" type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                            <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                        </div>
                        <label for="toggle" class="text-xs text-gray-700">Aktif</label>
                    </div>
                </div>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Stok Produk <span class="text-xs text-gray-500">wajib</span>
                        <p class="text-sm py-1 text-gray-500">Atur jumlah minimum yang harus dibeli untuk produk ini..</p>
                    </div>
                    <div class="col-span-3 pl-20">
                        <input name="quantity" type="number" class="p-2 rounded w-full border-2" placeholder="Masukkan Stok">
                    </div>
                </div>
            </div>
            <div class="p-4 bg-white rounded-lg shadow mt-4">
                <h2 class="font-bold">Berat</h2>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Berat Produk<span class="text-xs text-gray-500">wajib</span>
                        <p class="text-sm py-1 text-gray-500">Masukkan berat dengan menimbang produk setelah dikemas.</p>
                    </div>
                    <div class="col-span-3 pl-20">
                        <label class="flex space-x-2 items-center">
                            <select disabled class="form-select block w-full mt-1 border-2 p-2">
                                <option>Gram (g)</option>
                                {{-- <option>Kilogram (kg)</option> --}}
                            </select>
                            <input name="weight" type="number" class="p-2 rounded w-full border-2" placeholder="Masukkan berat">
                        </label>
                    </div>
                </div>
            </div>

            <div class="text-right px-4 my-8">
                <span>
                    <button class="bg-gray-200 rounded py-2 px-6 text-gray-700 font-bold">Batal</button>
                    <button type="submit" class="bg-blue-400 rounded py-2 px-4 text-white font-bold">Simpan</button>
                </span>
            </div>
        </form>

        {{-- <div id="aaa">
            <h2>Images:</h2>
            <div class="flex space-x-2 m-2 items-start">
                <div v-for="(data, index) in rawData" class="flex ">
                    <div class="text-center">
                        <img class="w-24 h-24 border-2 border-gray-400 border-dashed p-1 object-cover rounded" :src="data">
                        <button class="btn btn-xs remove-file" @click="removeFile(index)">
                            <i class="fa fa-trash text-red-400" ></i>
                        </button>
                    </div>
                    <input type="radio" name="imgType">
                </div>
            
                <div class="flex mt-2" v-if="this.files.length < this.option.maxFileCount">
                    <div class="border-2 border-blue-400 border-dashed  p-8 rounded flex content-center tems-center" @drop="loaddropfile" @click="openinput">
                        <i class="fa fa-plus text-blue-400"></i>
                    </div>
                    <input type="file" class="hidden" id="vue-file-upload-input" @change="addImage">
                </div>
            </div>
            <div class="text-center m-2">
                <button class="bg-blue-400 rounded py-2 px-4 text-white font-bold" @click="upload">Upload</button>
            </div>
        </div> --}}


        {{-- <div id="categories">
            <div class="input-group">
                <div class="flex w-full">
                    <div id="input-group-3" class="z-30 rounded-l flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1 p-2">Category</div> 
                    <select class="tom-select px-2 w-full"  name="categories_id" id="categories_id" v-if="categories" v-model="categories_id">
                        <option v-for="category in categories" :value="category.id">@{{ category.name }}</option>
                    </select>
                    <select v-else class="form-control"></select>
                </div>
            </div>
            <div class="input-group mt-2 sm:mt-0">
                <div id="input-group-4" class="input-group-text">Regency</div>
                <input type="text" class="form-control" placeholder="Regency" aria-describedby="input-group-4">
                <div class="flex w-full">
                    <div id="input-group-3" class="z-30 rounded-l flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1 p-2">Sub Category</div> 
                    <select class="tom-select px-2 w-full"  name="subcategories_id" id="subcategories_id" v-if="subcategories" v-model="subcategories_id">
                        <option v-for="subcategory in subcategories" :value="subcategory.id">@{{ subcategory.name }}</option>
                    </select>
                    <select v-else class="form-control"></select>
                </div>
            </div>
        </div> --}}
            
    </div>

    
@endsection

@push('after-style')
<style>

    /* CHECKBOX TOGGLE SWITCH */
    /* @apply rules for documentation, these do not work as inline style */
    .toggle-checkbox:checked {
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #68D391;
    }
    .toggle-checkbox:checked + .toggle-label {
        @apply: bg-green-400;
        background-color: #68D391;
    }
    </style>
@endpush

{{-- @push('after-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        new Vue({
        el: "#aaa",
        data() {
            return {
            option: {
                maxFileCount: 3
            },
            files:[],
            rawData: [],
            }
        },
        methods: {
            loaddropfile: function(e) {
                e.preventDefault()
            e.stopPropagation()
                alert('ok')
                console.log(e)
            },
            openinput: function() {
                document.getElementById("vue-file-upload-input").click();
            },
            addImage: function(e) {
                const tmpFiles = e.target.files
            if (tmpFiles.length === 0) {
                return false;
            }
            const file = tmpFiles[0]
            this.files.push(file)
            const self = this
                const reader = new FileReader()
            reader.onload = function(e) {
                self.rawData.push(e.target.result)
            }
            reader.readAsDataURL(file)
            },
            removeFile: function(index) {
                this.files.splice(index, 1)
            this.rawData.splice(index, 1)
            document.getElementById("vue-file-upload-input").value = null
            },
            upload: function() {
                // alert('Check console to see uploads')
                // console.log(this.files)s
                axios.post(`${APP_URL}/api/post`,{files:this.files},{ headers: header })
                .then((response) => {});

            }
        },
        mounted(){

        }
        })

    </script>
@endpush --}}

@push('after-script')
    {{-- <script src="/vendor/vue/vue.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
    var categories = new Vue({
        el: "#categories",
        mounted() {
            this.getCategoriesData();
            this.getSubCategoriesData();
        },
        data: {
        categories: null,
        subcategories: null,
        categories_id: null,
        subcategories_id: null,
        },
        methods: {
        getCategoriesData() {
            var self = this;
            axios.get('{{ route('api-categories') }}')
            .then(function (response) {
                self.categories = response.data;
            })

        },
        getSubCategoriesData() {
            var self = this;
            axios.get('{{ url('api/subcategories') }}/' + self.categories_id)
            .then(function (response) {
                self.subcategories = response.data;
            })
        },
        },
        watch: {
        categories_id: function (val, oldVal) {
            this.subcategories_id = null;
            this.getSubCategoriesData();
        },
        }
    });
    </script>
@endpush