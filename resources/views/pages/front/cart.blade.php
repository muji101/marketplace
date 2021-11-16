@extends('layouts.app')

@section('content')
    <div class="py-12 mx-32">
        <div class="grid grid-cols-4">
            <div class="col-span-3">
                <div class="text-left px-4">
                    <h1 class="text-xl font-bold">Keranjang</h1>
                    @php
                        $totalPrice = 0
                    @endphp
                    @forelse ($carts as $cart)
                    <div class="py-2">
                        <label class="flex items-center space-x-3">
                            <input type="checkbox">
                            <img class="rounded-lg w-24 h-24 object-cover" src="{{ asset('/storage/'.$cart->product->galleries->first()->photo) }}" alt="">
                            <div class="">
                                <h3 class="text-lg">{{ $cart->product->name }}</h3>
                                <h3 class="font-bold">Rp {{ number_format($cart->product->price) }}</h3>
                            </div>
                        </label>
                        <div class="text-gray-500 text-right flex justify-between px-6 py-4">
                            <div class="text-left w-2/4">
                                <button
                                    class="text-blue-600" ype="button" onclick="toggleModal('modal')">
                                    Tulis catatan untuk barang ini
                                </button>
                                <p class="text-sm">Catatan Pembeli : {{ $cart->note != null ? $cart->note : '-'}}</p>
                            </div>
                            <div class="flex space-x-2">
                                <form action="{{ route('wishlist-store',  isset($cart->id) ? $cart->id : '') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="flex space-x-1">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="product_id" value="{{ $cart->product->id }}">
                                        <button class="">Pindahkan ke Wishlist</button>
                                    </div>
                                </form>
                                <span>|</span>
                                <form action="{{ route('cart-delete',  isset($cart->id) ? $cart->id : '') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="fas fa-trash-alt text-red-500 hover:text-red-600"></i></button>
                                </form>
                            </div>
                            <div class="space-x-2">
                                <i class="fas fa-minus-circle"></i>
                                <input type="number" class="w-12">
                                <i class="text-blue-400 fas fa-plus-circle"></i>
                            </div>
                        </div>
                    </div>
                    @php
                        $totalPrice += $cart->product->price
                    @endphp
                    @endforeach
                </div>

                <div class="py-8 px-4">
                    <div class="flex justify-between">
                        <h1 class="text-lg text-left font-bold">Terakhir Dilihat</h1>
                        <a href="#" class="text-md text-left text-blue-500 font-bold">Lihat Semua</a>
                    </div>
                    <div class="py-4 grid grid-cols-5 gap-2">
                        
                        @foreach ($products as $product)
                        <a href="{{ route('front.product-detail', $product->id) }}" class="shadow-md rounded-lg text-left">
                            <img class="mb-2 w-52 h-44 object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">{{ Str::limit($product->name, 30, '...') }}</h4>
                                <h3 class="font-bold py-1">Rp {{ number_format($product->price) }}</h3>
                                <h5 class="text-gray-500 text-xs">{{ Str::limit($product->store->address, 20, '...') }}</h5>
                                <h5 class=" text-gray-600 text-xs mt-1"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-blue-400 rounded-lg text-blue-400 w-full mt-2 font-bold py-2 text-sm">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </a>
                        @endforeach
                        
                    </div>
                </div>

                <div class="py-8 px-4">
                    <div class="flex justify-between">
                        <h1 class="text-lg text-left font-bold">Rekomendasi Untukmu</h1>
                        <a href="#" class="text-md text-left text-blue-500 font-bold">Lihat Semua</a>
                    </div>
                    <div class="py-4 grid grid-cols-5 gap-2">
                        
                        @foreach ($products as $product)
                        <a href="{{ route('front.product-detail', $product->id) }}" class="shadow-md rounded-lg text-left">
                            <img class="mb-2 w-52 h-44 object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                            <div class="px-2 leading-6 py-2">
                                <h4 class="text-sm">{{ Str::limit($product->name, 30, '...') }}</h4>
                                <h3 class="font-bold py-1">Rp {{ number_format($product->price) }}</h3>
                                <h5 class="text-gray-500 text-xs">{{ Str::limit($product->store->address, 20, '...') }}</h5>
                                <h5 class=" text-gray-600 text-xs mt-1"><i class="text-yellow-400 fas fa-star"></i> 4,8 | Terjual 765</h5>
                                <button class="border-2 border-blue-400 rounded-lg text-blue-400 w-full mt-2 font-bold py-2 text-sm">
                                <i class="fas fa-plus"></i>
                                Keranjang
                            </button>
                            </div>
                        </a>
                        @endforeach
                        
                    </div>
                </div>

            </div>
            <div class="col-span-1">
                <div class="border-2 rounded-lg p-4 sticky top-32">
                    <h1 class="text-lg text-left font-bold">Ringkasan Belanja</h1>
                    <div class="flex justify-between py-4   border-b-2">
                        <div class="text-left text-gray-500">
                            <p>Total Harga ({{ $carts->count() }} barang)</p>
                            <p>Total Diskon Barang</p>
                        </div>
                        <div class="text-right text-gray-500">
                            <p>Rp {{ number_format($totalPrice ?? 0) }}</p>
                            <p>- Rp 0</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <h1 class="text-lg my-2 text-left font-bold">Total Harga</h1>
                        <h1 class="text-lg my-2 text-left font-bold">Rp  {{ number_format($totalPrice ?? 0) }}</h1>
                        {{-- <h1 class="text-lg my-2 text-left font-bold">Rp  {{ number_format($tot) }}</h1> --}}
                    </div>
                    <a href="/checkout"  class="py-2 block text-center bg-blue-400 rounded-lg font-bold text-md text-white">Beli ({{ $carts->count() }})</a>
                </div>
            </div>
        </div>
    </div>

    {{-- modal --}}
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal">
        <div class="relative w-auto my-6 mx-auto max-w-6xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold">
                    Catatan Produk
                </h3>
                <button
                class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                onclick="toggleModal('modal')">
                <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                    <i class="fas fa-times"></i>
                </span>
                </button>
            </div>
            <div class="p-4">
                <form action="{{ route('cart-note', isset($cart->id) ? $cart->id : '' ) }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="flex space-x-1">
                        <input name="note" type="text" class="border-2 rounded w-full p-2" >
                        <button class="bg-blue-400 rounded font-bold text-white px-2">buat</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-backdrop"></div>

@endsection

@push('after-script')
    <script type="text/javascript">
        function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
@endpush