@extends('layouts.sell')

@section('title', 'Product Create')

@section('content')
    <div class="p-4">
        <h1 class="font-bold text-lg">Tambah Produk</h1>
        <div class="p-4 bg-white rounded-lg shadow">
            <h2 class="font-bold">Upload Produk</h2>
            <div class="grid grid-cols-4 py-4">
                <div class="col-span-1">
                    Foto Produk <span class="text-xs text-gray-500">wajib</span>
                    <p class="text-sm py-1 text-gray-500">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px).</p>
                    <p class="text-sm py-1 text-gray-500">Pilih foto produk atau tarik dan letakkan hingga 5 foto sekaligus di sini. Cantumkan min. 3 foto yang menarik agar produk semakin menarik pembeli.</p>
                </div>
                <div class="col-span-3">
                    <div class="flex px-4 space-x-4">
                        <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-red-400">foto 1</div>
                        <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-red-400">foto 2</div>
                        <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-red-400">foto 3</div>
                        <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-red-400">foto 4</div>
                    </div>
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
                <div class="col-span-3">
                    <input type="text" class="p-2 rounded w-full border-2" placeholder="Contoh: Sepatu Pria (Jenis/Kategori Produk) + Tokostore (Merek) + Kanvas Hitam (Keterangan)">
                </div>
            </div>
            <div class="grid grid-cols-4 py-4">
                <div class="col-span-1">
                    Kategori Produk <span class="text-xs text-gray-500">wajib</span>
                </div>
                <div class="col-span-3">
                    <label class="block text-left" style="max-width: 400px;">
                        <select class="form-select block w-full mt-1 border-2 w-full p-2">
                            <option>Option 1</option>
                            <option>Option 2</option>
                        </select>
                    </label>
                </div>
            </div>
        </div>
        <div class="p-4 bg-white rounded-lg shadow mt-4">
            <h2 class="font-bold">Detail Produk</h2>
            <div class="grid grid-cols-4 py-4">
                <div class="col-span-1">
                    Kondisi Produk
                </div>
                <div class="col-span-3">
                    <div class="">
                        <label>
                            <input type="checkbox"> Baru
                        </label>
                        <label>
                            <input type="checkbox"> Bekas
                        </label>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-4 py-4">
                <div class="col-span-1">
                    Nama Produk <span class="text-xs text-gray-500">wajib</span>
                    <p class="text-sm py-1 text-gray-500">
                        Wajib Cantumkan min. 40 karakter agar semakin menarik dan mudah ditemukan oleh pembeli, terdiri dari jenis produk, merek, dan keterangan seperti warna, bahan, atau tipe.
                    </p>
                </div>
                <div class="col-span-3">
                    <textarea name="" id="" class="w-full border-2 p-2 rounded-lg text-xs h-60" 
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
                <div class="col-span-3">
                    <input type="text" class="p-2 rounded w-full border-2" value="1">
                </div>
            </div>
            <div class="grid grid-cols-4 py-4">
                <div class="col-span-1">
                    Harga Satuan <span class="text-xs text-gray-500">wajib</span>
                    <p class="text-sm py-1 text-gray-500">Atur jumlah minimum yang harus dibeli untuk produk ini..</p>
                </div>
                <div class="col-span-3">
                    <input type="number" class="p-2 rounded w-full border-2" placeholder="Masukkan harga">
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
                <div class="col-span-3">
                    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                        <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                        <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                    </div>
                    <label for="toggle" class="text-xs text-gray-700">Toggle me.</label>
                </div>
            </div>
            <div class="grid grid-cols-4 py-4">
                <div class="col-span-1">
                    Stok Produk <span class="text-xs text-gray-500">wajib</span>
                    <p class="text-sm py-1 text-gray-500">Atur jumlah minimum yang harus dibeli untuk produk ini..</p>
                </div>
                <div class="col-span-3">
                    <input type="number" class="p-2 rounded w-full border-2" placeholder="Masukkan harga">
                </div>
            </div>
        </div>
    </div>

    <div class="text-right px-4 my-8">
        <span>
            <a href="#" class="bg-gray-200 rounded py-2 px-6 text-gray-700 font-bold">Batal</a>
            <a href="#" class="bg-red-400 rounded py-2 px-4 text-white font-bold">Simpan</a>
        </span>
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