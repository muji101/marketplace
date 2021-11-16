@extends('layouts.sell')

@section('title', 'Review')

@section('content')
    <div class="p-4">
        <h1 class="font-bold text-lg">Ulasan</h1>
        <div class="h-auto p-4 border-2 rounded-lg bg-white">
            <!-- Tabs -->
                <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
                    <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">Rating Produk</a></li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Inbox Ulasan</a></li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Penilaian Pembeli</a></li>
                </ul>
        
            <!-- Tab Contents -->
                <div id="tab-contents">
                    <div id="first" class="p-4">
                        <div class="py-2">
                            <h1 class="font-bold">Rata-rata  rating {{ $products->count() }} produk</h1>
                            <div class="flex py-4 items-center space-x-4">
                                <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                <p class="font-bold text-5xl">
                                    {{-- Result seluruh rating --}}
                                    @php
                                        $sumRating = $reviews->sum('rating');
                                        if ($reviews->count() >= 1) {
                                            $countRating = $reviews->count();
                                            $resRating = $sumRating/$countRating;
                                        }else
                                        {
                                            $resRating = 0;
                                        }
                                    @endphp
                                    {{ $resRating }}
                                    <span class="text-gray-500 text-lg">/5.0</span>
                                </p>
                                <p class="text-lg"><span class="font-bold">{{ $reviews->count() }}</span> ulasan</p>
                            </div>
                            <div class="py-2">
                                <table style="width: 100%">
                                    <tr class="text-left border-t-2 border-b-2 h-12">
                                        <th style="width: 40%">Nama Produk</th>
                                        <th style="width: 15%" class="pl-4">Rating</th>
                                        <th style="width: 15%">Total Ulasan</th>
                                        <th style="width: 30%">Topik Populer</th>
                                    </tr>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <div class="flex items-center space-x-2">
                                                    <img class="w-14 h-14 object-cover rounded-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}" alt="">
                                                    <h1>{{ $product->name }}</h1>
                                                </div>
                                            </td>
                                            <td>
                                                <i class="fas fa-star text-yellow-400 pl-4"></i>
                                                {{-- rating perproduct --}}
                                                @php
                                                    $sumRating = $product->review->sum('rating');
                                                    if ($product->review->count() >= 1) {
                                                        $countRating = $product->review->count();
                                                    }
                                                    $resRating = $sumRating/$countRating;
                                                @endphp 
                                                {{ $resRating }} 
                                            </td>
                                            <td>{{ $product->review->count() }}</td>
                                            <td>
                                                <div class="flex flex-wrap gap-1 py-2">
                                                    <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">pengiriman</a>
                                                    <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">kualitas</a>
                                                    <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">kemasan</a>
                                                    <a href="#" class="px-2 py-1 text-gray-500 border-2 rounded-lg">pelayanan</a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <div id="second" class="hidden">
                        @foreach ($reviews as $review)
                            <div class="grid grid-cols-4 py-4 border-t-2">
                                <div class="col-span-1 text-center">
                                    <div class="flex justify-center">
                                        <i class="fas fa-star text-yellow-400 text-4xl"></i>
                                        <p class="font-bold text-5xl">{{ $review->rating }}</p>
                                    </div>
                                    <p>Oleh<span class="font-bold"> {{ $review->user->name }}</span></p>
                                    <p class="text-gray-500">{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</p>
                                </div>
                                <div class="col-span-3">
                                    <div class="flex items-center space-x-2">
                                        <img class="w-14 h-14 object-cover  rounded-lg" src="{{ asset('/storage/'.$review->product->galleries->first()->photo) }}" alt="">
                                        <h1>{{ $review->product->name }}</h1>
                                    </div>
                                    <p>{{ $review->content }}</p>
                                    <div class="ml-3  my-2">
                                        @if (isset($review->reply))
                                            <p class="bg-blue-200 p-2 rounded">
                                                {{ $review->reply->reply }}
                                            </p>
                                        @endif
                                    </div>
                                    <form action="{{ route('seller.review-reply') }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="review_id" value="{{ $review->id }}">
                                        <input type="text" name="reply" class="p-2 w-full rounded-lg border-2" placeholder="Balas di sini">
                                        <div class="text-right">
                                            <button type="submit" class="py-1 px-4 bg-blue-400 rounded text-white mt-2">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="third" class="hidden mt-2">
                        @foreach ($reviews as $review)
                            <div class="border-2 rounded mt-2">
                                <div class="border-b-2 flex justify-between p-2 bg-gray-100">
                                    <span>Pembeli</span>
                                    <span>Pesan diterima: {{ $review->product->created_at }}</span>
                                </div>
                                <div class="p-4">
                                    <div class="grid grid-cols-6 items-center">
                                        <div class="col-span-1">
                                            <img src="{{ asset('/storage/'.$review->product->galleries->first()->photo) }}" class="w-24 h-24 object-cover rounded" alt="">
                                        </div>
                                        <div class="col-span-5">
                                            <p class="font-bold">{{ $review->product->name }}</p>
                                            <p>
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
                                            <p class="text-gray-500 py-4">{{ $review->content }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
@endsection

@push('after-script')
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

        tabTogglers[i].parentElement.classList.remove("border-blue-400", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
        if ("#" + tabContents.children[i].id === tabName) {
            continue;
        }
        tabContents.children[i].classList.add("hidden");

        }
        e.target.parentElement.classList.add("border-blue-400", "border-b-4", "-mb-px", "opacity-100");
    });
    });

    document.getElementById("default-tab").click();
</script>
@endpush