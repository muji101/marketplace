@extends('layouts.app')

@section('content')
<div class="py-12 mx-32">
    <div class="py-4">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Wishlist</h1>
        </div>
        <div class="py-8 grid grid-cols-6 gap-4">
            @foreach ($wishlists as $wishlist)
            <div class="shadow-lg rounded-lg text-left relative">
                <img class="mb-2 w-52 h-52 object-cover rounded-t-lg" src="{{ asset('/storage/'.$wishlist->product->galleries->first()->photo) }}">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">{{ Str::limit($wishlist->product->name, 40, '...') }}</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm py-2">Rp {{ number_format($wishlist->product->price) }}</h3>
                    <h5 class="text-gray-500 text-xs">{{ $wishlist->product->address }}</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
                    <form action="{{ route('cart-add', $wishlist->product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <button type="submit" class="text-center w-full mt-2 border-2 border-blue-500 rounded-md text-blue-400 font-bold text-sm py-1">
                            <i class="fas fa-plus"></i> Beli
                        </button>  
                    </form>
                    <div class="absolute top-0 right-0 bg-gray-50 rounded px-2 py-1">
                        <form action="{{ route('wishlist-delete', $wishlist->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fas fa-trash-alt text-red-500 hover:text-red-600"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>    

    <div class="py-4">
        <div class="flex items-center space-x-2">
            <h1 class="text-xl font-bold text-left">Rekomendasi Untuk Anda</h1>
        </div>
        <div class="py-8 grid grid-cols-6 gap-4">
            @foreach ($products as $product)
            <a href="{{ route('front.product-detail', $product->id) }}" class="shadow-lg rounded-lg text-left ">
                <img class="mb-2 w-52 h-52 object-cover rounded-t-lg" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}">
                <div class="px-2 leading-6 py-2">
                    <h4 class="text-sm">{{ Str::limit($product->name, 40, '...') }}</h4>
                    <h3 class="font-bold  text-yellow-600 text-sm py-2">Rp {{ number_format($product->price) }}</h3>
                    <h5 class="text-gray-500 text-xs">{{ $product->address }}</h5>
                    <h5 class=" text-gray-600 text-xs">
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                        <i class="text-yellow-400 fas fa-star"></i> 
                    ulasan (209)</h5>
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