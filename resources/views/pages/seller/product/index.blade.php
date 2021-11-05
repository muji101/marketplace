@extends('layouts.sell')

@section('title', 'Product List')

@section('content')
    <div class="p-4">
        <div class="font-bold py-4 flex justify-between items-center">
            <h1>Daftar Produk</h1>
            <a href="{{ route('seller.product-create') }}" class="py-2 px-4 rounded-lg bg-blue-400 text-white">Tambah Produk</a>
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
                    @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="flex items-center space-x-2 py-2">
                                @forelse ($product->galleries as $gallery)
                                    <img alt="photo" class="w-14 h-14 rounded-lg object-cover" src="{{ asset('/storage/'.$gallery->photo) }}">
                                @empty
                                    <img alt="photo" class="w-14 h-14 rounded-lg object-cover text-center border-2 text-xs text-gray-500" src="">
                                @endforelse
                                <h1>{{ $product->name }}</h1>
                            </div>
                        </td>
                        <td>Rp.{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->status == 1 ? 'Aktif' : 'Nonaktif'  }}</td>
                        <td>
                            {{-- <button class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center" type="button" data-dropdown-toggle="dropdown">More<svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                            <!-- Dropdown menu -->
                            <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                                <ul class="py-1" aria-labelledby="dropdown">
                                    <li>
                                        <a href="{{ route('seller.product-update', $product->id) }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Edit</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('seller.product-detail', $product->id) }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Detail</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Delete</a>
                                    </li>
                                </ul>
                            </div> --}}
                            <a href="{{ route('seller.product-detail', $product->id) }}" class="text-sm hover:bg-gray-100 text-gray-700 px-4 py-2">Detail</a>
                            <form action="{{ route('seller.product-delete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
@endpush