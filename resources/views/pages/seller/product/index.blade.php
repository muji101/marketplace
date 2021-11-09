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
                <table  style="width: 100%">
                    <tr class="text-left border-t-2 border-b-2 h-12">
                        <th style="width: 45%">Nama Produk</th>
                        <th style="width: 15%">Harga</th>
                        <th style="width: 15%">Stok</th>
                        <th style="width: 15%">Status</th>
                        <th style="width: 10%">Aksi</th>
                    </tr>
                    @foreach ($products as $product)
                    <tr>
                        <td class="pr-8">
                            <div class="flex items-center space-x-2 py-2">
                                {{-- @forelse ($product as $product) --}}
                                    <img alt="photo" class="w-14 h-14 rounded-lg object-cover" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                                {{-- @empty --}}
                                    {{-- <img alt="photo" class="w-14 h-14 rounded-lg object-cover text-center border-2 text-xs text-gray-500" src=""> --}}
                                {{-- @endforelse --}}
                                <h1>{{ $product->name }}</h1>
                            </div>
                        </td>
                        <td>Rp.{{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->status == 1 ? 'Aktif' : 'Nonaktif'  }}</td>
                        <td class="flex space-x-6 pt-6">
                            <span>
                                <a href="{{ route('seller.product-detail', $product->id) }}" class="inline"><i class="fas fa-info text-blue-500 hover:text-blue-600"></i></a>
                            </span>
                            <form action="{{ route('seller.product-delete', $product->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="fas fa-trash text-red-500 hover:text-red-600"></i></button>
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