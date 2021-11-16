@extends('layouts.app')
@section('title', 'Product | '.$products->name)

@section('content')
<div class="py-12 mx-32">
    <div class="grid grid-cols-4 gap-8 text-left">
        <div class="col-span-3">
            <div class="grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <div class="sticky top-32" id="gallery">
                        {{-- <img class="w-64 rounded-lg transform hover:scale-150" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt=""> --}}
                        <div class="py-2 h-60">
                            {{-- <img id="zoom_01" class="rounded-lg h-full w-full object-cover" src="{{ asset('/storage/'.$products->galleries->first()->photo) }}"
                            data-zoom-image="{{ asset('/storage/'.$products->galleries->first()->photo) }}"/> --}}
                            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" id="zoom_01" class="rounded-lg h-full w-full object-cover"
                            :data-zoom-image="photos[activePhoto].url" />

                        </div>
                        
                        <div class="py-4 flex space-x-2">
                            {{-- <img class="w-12 border-2 border-blue-400 rounded-lg" src="https://images.tokopedia.net/img/cache/700/VqbcmM/2021/8/1/9d7ef661-9696-4811-bfa8-a753c14e8280.jpg" alt="">
                            <img class="w-12  rounded-lg" src="https://images.tokopedia.net/img/cache/100-square/VqbcmM/2021/8/1/3814c24f-0128-4847-a464-128adf338c13.jpg.webp?ect=4g" alt=""> --}}
                            {{-- @foreach ($products->galleries as $item)
                                <span>
                                    <img class="w-12 h-12  rounded-lg object-cover" src="{{ asset('/storage/'.$item->photo) }}" alt="">
                                </span>
                            @endforeach --}}
                            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id">
                                <a href="#" @click="changeActive(index)">
                                <img :src="photo.url" class="w-12 h-12  rounded-lg object-cover border-2 hover:border-blue-400 active:border-blue-400" :class="{active: index == activePhoto}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    {{-- <section class="store-gallery mb-3" id="gallery">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-8" data-aos="zoom-in">
                                <transition name="slide-fade" mode="out-in">
                                <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" alt="" class="w-100 main-image">
                                </transition>
                            </div>
                            <div class="col-lg-2">
                                <div class="row">
                                <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id" data-aos="zoom-in" data-aos-delay="100">
                                    <a href="#" @click="changeActive(index)">
                                    <img :src="photo.url" class="w-100 thumbnail-image" :class="{active: index == activePhoto}" alt="">
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section> --}}
                </div>
                <div class="col-span-2">
                    <div class="pb-4 text-left">
                        <h1 class="font-bold text-lg">{{ $products->name }}</h1>
                        <div class="flex space-x-4 py-2">
                            <h5>Terjual <span class="text-gray-500">338</span></h5>
                            <h5>
                                <i class="text-yellow-400 fas fa-star"></i>
                                {{-- Result seluruh rating --}}
                                @php
                                    $sumRating = $products->review->sum('rating');
                                    if ($products->review->count() >= 1) {
                                        $countRating = $products->review->count();
                                        $resRating = $sumRating/$countRating;
                                    }else
                                    {
                                        $resRating = 0;
                                    }
                                @endphp
                                {{ $resRating }}
                                (<span class="text-gray-500">{{ $products->review->count() }} Ulasan</span>)
                            </h5>
                            <h5>Diskusi <span class="text-gray-500">{{ $discussions->count() }}</span></h5>
                        </div>
                        <h1 class="font-bold text-lg">Rp {{ number_format($products->price) }}</h1>
                    </div>
                    <div id="tabs" class="py-2 text-left border-t-2 border-b-2">
                        <span>
                            <a id="default-tab" href="#first" class="font-bold text-gray-500 px-4">Detail</a>
                        </span>
                        <span>
                            <a href="#second" class="font-bold text-gray-500 px-4">Info Penting</a>
                        </span>
                    </div>
                    <div id="tab-contents">
                        <div id="first" class="py-4 text-left">
                            <ul class="text-gray-500">
                                <li>Kondisi: <span class="text-black">{{ $products->condition }}</span></li>
                                <li>Berat: <span class="text-black">{{ $products->weight }} Gram</span></li>
                                <li>Kategory: <span class="font-bold text-blue-400">{{ $products->subcategory->name }}</span></li>
                                <li>Etalase: <span class="font-bold text-blue-400">Semua Etalase</span></li>
                            </ul>
                            <div class="py-2 text-gray-500">
                                {!! $products->description !!}
                            </div>
                        </div>
                        <div id="second" class="py-4 text-left">
                            <div class="py-2">
                                <h1 class="font-bold">Aturan Penerimaan Order</h1>
                                <p class="text-gray-500">Bismillah... Sebelumnya kami ucapkan terimakasih atas kepercayaan anda memilih kami... </p>
                                <a href="#" class="text-blue-400 font-bold text-sm">Selengkapnya</a>
                            </div>
                            <div class="py-2">
                                <h1 class="font-bold">Kebijakan Pengembalian Produk</h1>
                                <p class="text-gray-500">Barang tidak boleh di buka atau isi barang tersebut tidak boleh dicoba,jika barang sudah di buka dan dicoba KAMI TIDAK BISA MENERIMA BARANG TERSEBUT LAGI.... </p>
                                <a href="#" class="text-blue-400 font-bold text-sm">Selengkapnya</a>
                            </div>
                            <div class="py-2">
                                <h1 class="font-bold">Alamat Kurang Lengkap</h1>
                                <p class="text-gray-500">Dimohon kepada pembeli untuk melengkapi alamat tujuan,jika alamat tujuan kurang lengkap NO KOMPLAIN.... </p>
                                <a href="#" class="text-blue-400 font-bold text-sm">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="py-2">
                        <div class="flex justify-between">
                            <a href="{{ route('store-show', $stores->first()->id) }}" class="flex space-x-2">
                                <img class="w-12 h-12 object-cover rounded-full" src="{{ asset('/storage/'.$stores->first()->photo) }}" alt="">
                                <div class="text-left">
                                    <h2>{{ $stores->first()->name }}</h2>
                                    {{-- <h2 class="text-blue-400">• Online</h2> --}}
                                    <div>
                                        {{-- online offline status --}}
                                        @if (Cache::has('user-is-online-' . $stores->first()->user->id))
                                            <span class="text-blue-400 font-bold">• Online</span>
                                        @else
                                            <div class="text-blue-400">Online <span class="font-bold">{{ \Carbon\Carbon::parse($stores->first()->user->last_seen)->diffForHumans() }}</span></div>
                                        @endif
                                    </div>
                                </div>
                            </a>
                            <button class="font-bold text-blue-400 border-2 border-blue-400 rounded-lg px-8">Follow</button>
                        </div>
                        <div class="flex justify-center space-x-4 py-4">
                            <h5><i class="fas fa-star"></i> 4.8 <span class="text-gray-500 text-sm">rata-rata ulasan</span></h5>
                            <h5>
                                <i class="fas fa-watch"></i> -+ 16 Jam
                                <span class="text-gray-500 text-sm">pesanan diproses</span>
                            </h5>
                        </div>
                    </div>
                    <div class="py-2 text-left">
                        <h1 class="font-bold">Pengiriman</h1>
                        <div class="">
                            <h4><i class="w-6 fas fa-map-marker-alt"></i> Dikirim dari <span class="font-bold">Jakarta Barat</span></h4>
                            <div class="flex">
                                <i class="w-6 fas fa-truck"></i>
                                <div class="pl-1">
                                    <h4> Ongkir Reguler 27 rb - 30 rb</h4>
                                    <h4 class="text-gray-500">Estimasi tiba 1 - 5 Oct</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <h1 class="font-bold">Ulasan ({{ $products->review->count() }})</h1>
                <h3 class="text-sm">{{ $products->name }}</h3>
                <div class="py-4">
                    <h3 class="text-sm font-bold">Foto Dari Pembeli ({{ $products->review->count() }})</h3>
                    <div class="flex space-x-3 overflow-x-auto mt-2">
                        @foreach ($products->review as $photo)
                            <img src="{{ asset('/storage/'.$photo->photo) }}" class="w-24 h-24 rounded-md object-cover  border-2 border-blue-400" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="py-4">
                    <h3 class="text-sm font-bold">Semua Ulasan ({{ $products->review->count() }})</h3>
                    @foreach ($products->review as $review)
                    <div class="flex space-x-4 border-b-2 py-4">
                        <div class="text-sm flex space-x-2 w-60">
                            <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/'.$review->user->photo) }}" alt="">
                            <div>
                                <p class="font-bold text-blue-400">{{ $review->user->name }}</p>
                                <p class="text-gray-400">{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</p>
                            </div>
                        </div>
                        <div class="text-sm space-y-2">
                            <div class="flex">
                                {{-- rating view --}}
                                @php 
                                    $rating = $review->rating; 
                                @endphp  
                                @for($x = 5; $x > 0; $x--)
                                    @php 
                                        if($rating > 0.5){
                                            echo '<i class="text-yellow-400 fas fa-star"></i>';
                                        }elseif($rating <= 0 ){
                                            echo '<i class="text-yellow-400 far fa-star"></i>';
                                        }else{
                                            echo '<i class="text-yellow-400 fas fa-star-half-alt"></i>';
                                        }
                                        $rating--;      
                                    @endphp
                                @endfor
                                </p>
                            </div>
                            <p class="text-sm text-gray-700">{{ $review->content }}</p>
                            <img src="{{ asset('/storage/'.$review->photo) }}" class="w-16 h-16 object-cover rounded-md border-2 border-blue-400" alt="">
                            <div class="p-2 bg-gray-100 rounded w-4/5">
                                <div class="flex space-x-2 items-center">
                                    <img src="{{ asset('/storage/'.$review->product->store->photo) }}" class="w-8 h-8 rounded-full object-cover shadow-md" alt="">
                                    <div class="">
                                        <p class="font-bold text-blue-400">{{ $review->product->store->name }} <span class="font-normal text-xs bg-blue-200 text-blue-600 p-1 rounded">Penjual</span></p>
                                        <p class="text-gray-700 text-xs">{{ \Carbon\Carbon::parse($review->reply->created_at)->diffForHumans() }}</p>
                                    </div>
                                </div>
                                <p class="pl-10 text-gray-900 pt-2 text-md">
                                    {{ $review->reply->reply }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="py-4">
                <h1 class="font-bold">Diskusi ({{ $discussions->count() }})</h1>
                <h3 class="text-sm">Kapas Filter Air Humidifier Diffuser Purifier Replacement Cotton Swab</h3>
                <div class="py-4">
                    <div class="flex items-center justify-between text-sm border-2 p-4 rounded">
                        <h3><i class="fas fa-question text-2xl"></i> 
                            Ada pertanyaan?
                            <span class="font-bold">Diskusikan dengan penjual atau pengguna lain</span>
                        </h3>
                        <button
                            class="p-2 font-bold bg-blue-400 rounded-lg text-white" ype="button" onclick="toggleModal('modal-example-small')">
                            Tulis pertanyaan
                        </button>
                    </div>
                    @foreach ($discussions as $discussion)
                    <div class=" my-4 border-2 rounded">
                        <div class="flex space-x-4 p-2 bg-gray-200">
                            <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/'.$discussion->user->photo) }}" alt="">
                            <div class="text-sm">
                                <p class="font-bold">{{ $discussion->user->name }} <span class="font-normal text-xs text-gray-500">| {{ \Carbon\Carbon::parse($discussion->created_at)->diffForHumans() }}</span></p>
                                <p class="text-gray-600">{{ $discussion->content }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="p-4 bg-gray-50">
                            <div class="pl-8">
                                @foreach ($discussion->subdiscussion as $subdiscussion)
                            <div class="flex space-x-4 py-4">
                                @if ($subdiscussion->user->id == $products->user_id)
                                    <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/'. $stores->first()->photo) }}" alt="">
                                @else
                                    <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/'. $subdiscussion->user->photo) }}" alt="">
                                @endif
                                <div class="text-sm">
                                    @if ($subdiscussion->user->id == $products->user_id)
                                        <p class="font-bold">{{ $stores->first()->name }} <span class="font-normal text-xs bg-blue-200 text-blue-600 p-1 rounded">Penjual</span> <span class="font-normal text-xs text-gray-500">| {{ \Carbon\Carbon::parse($subdiscussion->created_at)->diffForHumans() }}</span></p>
                                        <p class="text-gray-700">{{ $subdiscussion->note }}</p>
                                    @else
                                        <p class="font-bold">{{ $subdiscussion->user->name }} <span class="font-normal text-xs text-gray-500">| {{ \Carbon\Carbon::parse($subdiscussion->created_at)->diffForHumans() }}</span></p>
                                        <p class="text-gray-700">{{ $subdiscussion->note }}</p>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                            </div>
                            <div class="flex space-x-4 pt-4 pl-8">
                                <img class="w-8 h-8 rounded-full" src="{{ asset('/storage/'.Auth::user()->photo) }}" alt="">
                                <form action="{{ route('subdiscussions.store') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <div class="text-sm">
                                        <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="product_id" value="{{ $products->id }}">
                                        <textarea name="note" id="" cols="100%" rows="2" class="p-2 border-2 rounded resize-none" placeholder="Tulis komentar disini..."></textarea>
                                        <div class="flex justify-end space-x-2 pt-2">
                                            {{-- <button class="py-2 px-4 font-bold border-2 rounded-lg">Batal</button> --}}
                                            <button class="py-2 px-4 font-bold bg-blue-400 text-white rounded-lg">Kirim</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- modal --}}
        <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-example-small">
            <div class="relative w-auto my-6 mx-auto max-w-6xl">
                <!--content-->
                <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                    <h3><i class="fas fa-question"></i> 
                    Ada pertanyaan ?
                    </h3>
                    <button
                    class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                    onclick="toggleModal('modal-example-small')">
                    <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                        <i class="fas fa-times"></i>
                    </span>
                    </button>
                </div>
                <div class="p-4">
                    <form action="{{ route('discussions.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="text-sm">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="product_id" value="{{ $products->id }}">
                            <textarea name="content" id="" cols="70" rows="4" class="p-2 border-2" placeholder="Tulis pertanyaan disini..."></textarea>
                            <div class="flex justify-end space-x-2 pt-2">
                                {{-- <button class="py-2 px-4 font-bold border-2 rounded-lg">Batal</button> --}}
                                <button class="py-2 px-4 font-bold bg-gray-200 rounded-lg">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--footer-->
                    {{-- <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                        <button
                            class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('modal-example-small')">
                            Batal
                        </button>
                        <button
                            class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button" onclick="toggleModal('modal-example-small')">
                            Tambah
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-small-backdrop"></div>
        {{-- endmodal --}}
        
        <div class="col-span-1">
            <div class="sticky top-32">
                <div class="border-2 rounded-lg p-4 mb-2">
                    <h1 class="text-lg text-left font-bold">Atur jumlah dan catatan</h1>
                    <div class="py-4 flex space-x-2 items-center">
                        <i class="fas fa-minus-circle"></i>
                        <input type="number" class="w-12">
                        <i class="text-blue-400 fas fa-plus-circle"></i>
                        <div>Stock <span class="font-bold">{{ number_format($products->quantity) }}</span></div>
                    </div>
                    <h4 class="text-left text-sm text-blue-400 font-bold"><i class="fas fa-pencil"></i> Tambah Catatan</h4>
                    <div class="flex items-end justify-between">
                        <h1 class="text-md my-2 text-left text-gray-500">Subtotal</h1>
                        <h1 class="text-lg my-2 text-left font-bold">Rp {{ number_format($products->price) }}</h1>
                    </div>
                    {{-- <form action="{{ route }}">
                        <a href="/cart"  class=""></a>
                    </form> --}}
                    @auth
                        <form action="{{ route('cart-add', $products->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="block py-2 text-center mb-2 w-full bg-blue-400 rounded-lg font-bold text-md text-white">
                                <i class="fas fa-plus"></i> Keranjang
                            </button>  
                        </form>
                    @else
                        {{-- <a href="{{ route('login') }}" class="btn btn-success px-4 text-white btn-block mb-3">
                            Sign in to Add
                        </a> --}}
                    @endauth
                    <a  href="{{ route('pay', $products->id) }}" class="block text-center py-2 w-full text-blue-400 border-2 border-blue-400 rounded-lg font-bold text-md">Beli Langsung</a>
                    <div class="pt-2 flex justify-center space-x-2 text-xs">
                        <form action="{{ route('chat-store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="flex space-x-1">
                                <input type="hidden" name="user_id" value="{{ $products->user_id }}">
                                <input type="hidden" name="friend_id" value="{{ Auth::user()->id }}">
                                <button class=""><i class="fas fa-comment-dots"></i> Chat</button>
                            </div>
                        </form>
                        <form action="{{ route('wishlist-create') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="flex space-x-1">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="product_id" value="{{ $products->id }}">
                                <button class=""><i class="fas fa-heart"></i> Wishlist</button>
                            </div>
                        </form>
                        <a href=""><i class="fas fa-share"></i> Share</a>
                    </div>
                </div>
                <img src="{{ asset('/storage/'.$promos->photo) }}" alt="">
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Lainnya di toko ini</h1>
        </div>
        <div class="py-8 grid grid-cols-6 gap-4">
            @foreach ($productStore as $productSto)
                <a href="{{ route('front.product-detail', $productSto->id) }}" class="shadow-lg rounded-lg text-left ">
                    <img class="mb-2 w-full h-52 object-cover rounded-t-lg" src="{{ asset('/storage/'.$productSto->galleries->first()->photo) }}">
                    <div class="px-2 leading-6 py-2">
                        <h4 class="text-sm">{{ Str::limit($productSto->name, 40, '...') }}</h4>
                        <h3 class="font-bold  text-yellow-600 text-sm py-1">Rp {{ number_format($productSto->price) }}</h3>
                        <h5 class="text-gray-500 text-xs">{{ Str::limit($stores->first()->address, 20, '...') }}</h5>
                        <h5 class=" text-gray-600 text-xs">
                            {{-- rating perproduct --}}
                            @foreach ($productSto->review as $review)
                                @php
                                    $sumRating = $review->sum('rating');
                                    if ($review->count() >= 1) {
                                            $countRating = $review->count();
                                        }
                                    $resRating = $sumRating/$countRating;
                                @endphp  
                            @endforeach
                                @foreach(range(1,5) as $i)
                                    <span class="fa-stack" style="width:1em">
                                        <i class="text-yellow-400 far fa-star fa-stack-1x"></i>
                                        @if($resRating >0)
                                            @if($resRating >0.5)
                                                <i class="text-yellow-400 fas fa-star fa-stack-1x"></i>
                                            @else
                                                <i class="text-yellow-400 fas fa-star-half fa-stack-1x"></i>
                                            @endif
                                        @endif
                                        @php $resRating--; @endphp
                                    </span>
                                @endforeach
                                ulasan ({{ $productSto->review->count() }})
                        </h5>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="py-4">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Pilihan lainnya untukmu</h1>
        </div>
        <div class="py-8 grid grid-cols-6 gap-4">
            @foreach ($productAll as $productall)
            <a href="{{ route('front.product-detail', $productall->id) }}" class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-full h-52 rounded-t-lg object-cover" src="{{ asset('/storage/'.$productall->galleries->first()->photo) }}">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">{{ Str::limit($productall->name, 40, '...') }}</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm py-1">Rp {{ number_format($productall->price) }}</h3>
                    <h5 class="text-gray-500 text-xs">{{ Str::limit($productall->store->address, 20, '...') }}</h5>
                    <h5 class=" text-gray-600 text-xs mt-1">
                        {{-- rating perproduct --}}
                        @foreach ($productall->review as $review)
                            @php
                                $sumRating = $review->sum('rating');
                                $countRating = $review->count();
                                $resRating = $sumRating/$countRating;
                            @endphp  
                        @endforeach
                        @foreach(range(1,5) as $i)
                            <span class="fa-stack" style="width:1em">
                                <i class="text-yellow-400 far fa-star fa-stack-1x"></i>
                                @if($resRating >0)
                                    @if($resRating >0.5)
                                        <i class="text-yellow-400 fas fa-star fa-stack-1x"></i>
                                    @else
                                        <i class="text-yellow-400 fas fa-star-half fa-stack-1x"></i>
                                    @endif
                                @endif
                                @php $resRating--; @endphp
                            </span>
                        @endforeach
                        ulasan ({{ $productall->review->count() }})
                    </h5>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    
</div>
@endsection

@push('after-script')
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>
    <script src="/vendor/vue/vue.js"></script>

    <script type="text/javascript">
        function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>
    <script>
    var gallery = new Vue({
        el : "#gallery",
        mounted(){
        AOS.init();
        },
        data: {
        activePhoto: 0,
        photos: [
            @foreach ($products->galleries as $gallery)
                {
                id: {{ $gallery->id }},
                url: "{{ Storage::url($gallery->photo) }}"
                },
            @endforeach
        ],
        },
        methods: {
        changeActive(id){
            this.activePhoto = id;
        }
        }
    })
    </script>

    <script>
        $('#zoom_01').ezPlus({
            zoomType: 'inner',
            cursor: 'crosshair'
        });
    </script>
    <script>
        new Splide( '.splide', {
        type  : 'loop',
        perPage: 1,
        gap         : '1rem',
        rewind: true,
        pauseOnHover: false,
        autoplay: true,
        } ).mount();
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

            tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100", "transition", "duration-400");  tabContents.children[i].classList.remove("hidden");
            if ("#" + tabContents.children[i].id === tabName) {
                continue;
            }
            tabContents.children[i].classList.add("hidden");

            }
            e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100", "transition", "duration-400");
        });
        });

        document.getElementById("default-tab").click();
    </script>
    @endpush  

