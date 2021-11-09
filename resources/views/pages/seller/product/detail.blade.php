@extends('layouts.sell')

@section('title', 'Product Detail')

@section('content')
    <div class="p-4">
        <h1 class="font-bold text-lg">Detail Produk</h1>
        {{-- <form action="{{ route('seller.product-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST') --}}
            <div class="p-4 bg-white rounded-lg shadow">
                <h2 class="font-bold">Upload Produk</h2>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="grid grid-cols-4">
                    <div class="col-span-1">
                        Foto Produk <span class="text-xs text-gray-500">wajib</span>
                        <p class="text-sm py-1 text-gray-500">Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran minimum 700 x 700 px).</p>
                        <p class="text-sm py-1 text-gray-500">Pilih foto produk atau tarik dan letakkan hingga 5 foto sekaligus di sini. Cantumkan min. 3 foto yang menarik agar produk semakin menarik pembeli.</p>
                    </div>
                    <div class="col-span-3  pl-20">
                        <div class="flex space-x-4">
                            @foreach ($products->galleries as $item)
                                <div class="border-dashed  border-2 rounded-lg w-32 h-32 text-center text-gray-500 hover:border-blue-400">
                                    <img class="w-full h-full object-cover rounded-lg p-1" src="{{ asset('/storage/'.$item->photo) }}" alt="">
                                    <form action="{{ route('seller.gallery-delete', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="py-1"><i class="text-red-500 fas fa-trash"></i></button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="p-4">
                            <input type="file" name="photo">
                            <p class="text-gray-500">Kamu dapat memilih lebih dari foto</p>
                        </div> --}}
                        <div class="col-12 py-6">
                            <p class="text-gray-500">Kamu dapat memilih lebih dari foto</p>

                            <form action="{{ route('seller.gallery-upload') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                <input type="file" name="photo">
                                {{-- <input type="file" name="photo" id="file" style="display: none;" onchange="form.submit()"> --}}
                                <button class="bg-gray-100 rounded px-4 py-1" onclick="thisFileUpload()">
                                    Add Photo
                                </button>
                            </form>
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
                    <div class="col-span-3  pl-20">
                        <input name="name" value="{{ $products->name }}" type="text" class="p-2 rounded w-full border-2" placeholder="Contoh: Sepatu Pria (Jenis/Kategori Produk) + Tokostore (Merek) + Kanvas Hitam (Keterangan)">
                    </div>
                </div>
                <div class="grid grid-cols-4 py-4">
                    <div class="col-span-1">
                        Kategori Produk <span class="text-xs text-gray-500">wajib</span>
                    </div>
                    <div class="col-span-3  pl-20">
                        <div class="flex space-x-2">
                            <div>
                                <label class="">Kategori</label>
                                <select name="category_id" class="border-2 p-2 rounded w-96">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $products->category_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="">Sub kategori</label>
                                <select name="category_id" class="border-2 p-2 rounded w-96">
                                    @foreach ($subcategory as $category)
                                        <option value="{{ $category->id }}" {{ $products->subcategory_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
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
                            <option value="Baru" {{ "$products->condition "== 'Baru' ? 'selected' : ''  }}>Baru</option>
                                <option value="Bekas" {{ $products->condition == 'Bekas' ? 'selected' : ''  }}>Bekas</option>
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
                        <textarea name="description" class="w-full border-2 p-2 rounded-lg text-xs h-60" 
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
                        >{{ $products->description }}</textarea>
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
                        <input name="price" value="{{ $products->price }}" type="number" class="p-2 rounded w-full border-2" placeholder="Masukkan harga">
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
                    <div class="col-span-3  pl-20">
                        <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                            <input name="status" type="checkbox" id="toggle" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
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
                    <div class="col-span-3  pl-20">
                        <input name="quantity" value="{{ $products->quantity }}" type="number" class="p-2 rounded w-full border-2" placeholder="Masukkan harga">
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
                    <div class="col-span-3  pl-20">
                        <label class="flex space-x-2 items-center">
                            <select disabled class="form-select block w-full mt-1 border-2 w-full p-2">
                                <option>Gram (g)</option>
                                {{-- <option>Kilogram (kg)</option> --}}
                            </select>
                            <input name="weight" type="number" value="{{ $products->weight }}" class="p-2 rounded w-full border-2" placeholder="Masukkan berat">
                        </label>
                    </div>
                </div>
            </div>

            {{-- <div class="text-right px-4 my-8">
                <span>
                    <button class="bg-gray-200 rounded py-2 px-6 text-gray-700 font-bold">Batal</button>
                    <button type="submit" class="bg-blue-400 rounded py-2 px-4 text-white font-bold">Simpan</button>
                </span>
            </div> --}}
        {{-- </form> --}}
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

@push('after-script')
<script>
    function thisFileUpload() {
        document.getElementById('file').click();
    }
    </script>
@endpush