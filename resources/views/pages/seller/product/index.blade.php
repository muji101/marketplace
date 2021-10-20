@extends('layouts.sell')

@section('title', 'Product List')

@section('content')
    <div class="p-4">
        <div class="font-bold py-4 flex justify-between items-center">
            <h1>Daftar Produk</h1>
            <a href="#" class="py-2 px-4 rounded-lg bg-red-400 text-white">Tambah Produk</a>
        </div>
        <div class="p-4 bg-white rounded-lg">
            <div class="py-2">
                <table style="width: 100%">
                    <tr class="text-left border-t-2 border-b-2 h-12">
                        <th style="width: 40%">Nama Produk</th>
                        <th style="width: 15%">Harga</th>
                        <th style="width: 15%">Stok</th>
                        <th style="width: 15%">Status</th>
                        <th style="width: 15%">Aksi</th>
                    </tr>
                    <tr>
                        <td>
                            <div class="flex items-center space-x-2 py-2">
                                <img class="w-14 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                                <h1>Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</h1>
                            </div>
                        </td>
                        <td>Rp.0</td>
                        <td>12</td>
                        <td>aktif</td>
                        <td>
                            <button class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">More<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                                <ul class="py-1" aria-labelledby="dropdown">
                                    <li>
                                        <a href="/seller/product-create" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Edit</a>
                                    </li>
                                    <li>
                                        <a href="/product" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Detail</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
@endpush