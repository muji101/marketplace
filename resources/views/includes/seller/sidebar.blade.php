<div class="w-full p-2">
    <a href="{{ route('store-show', Auth::user()->store->id) }}" class="flex items-center font-bold space-x-2 border-b-2 py-4">
        <img class="w-12 h-12 object-cover rounded-full shadow-lg" src="{{ asset('/storage/'.Auth::user()->store->photo) }}" alt="">
        <span class="pl-1">{{ Auth::user()->store->name }}</span>
    </a>
    <ul class="flex flex-col">
        <li class="mt-3 {{ (request()->is('seller')) ? 'text-blue-400 border-l-4 border-blue-400' : '' }}">
            <a href="/seller" class="block font-semibold p-2 cursor-pointer"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="mt-3 {{ (request()->is('seller/chat*')) ? 'text-blue-400 border-l-4 border-blue-400' : '' }}">
            <a href="{{ route('seller.chat-index') }}" class="block font-semibold p-2 cursor-pointer"><i class="fas fa-comment-dots"></i> Chat</a>
        </li>
        <li class="mt-3 {{ (request()->is('seller/discussion*')) ? 'text-blue-400 border-l-4 border-blue-400' : '' }}">
            <a href="{{ route('seller.discussion-index') }}" class="block font-semibold p-2 cursor-pointer"><i class="fas fa-comments"></i> Diskusi</a>
        </li>
        <li class="mt-3">
            <a href="/seller/sales" class="block font-semibold p-2 cursor-pointer"><i class="fas fa-balance-scale-right"></i> Penjualan</a>
        </li>
        <li class="mt-3 {{ (request()->is('seller/reviews*')) ? 'text-blue-400 border-l-4 border-blue-400' : '' }}">
            <a href="{{ route('seller.review-index') }}" class="block font-semibold p-2 cursor-pointer"><i class="fas fa-blog"></i> Kata Pembeli</a>
        </li>
        <li class="mt-3 {{ (request()->is('seller/setting*')) ? 'text-blue-400 border-l-4 border-blue-400' : '' }}">
            <a href="{{ route('seller.setting') }}" class="block font-semibold p-2 cursor-pointer"><i class="fas fa-cog"></i> Pengaturan Toko</a>
        </li>
        <li class="{{ (request()->is('seller/products*')) ? 'text-blue-400 border-l-4 border-blue-400' : '' }} mt-3" x-data="accordion(1)">
            <h2
            @click="handleClick()"
            class="flex flex-row justify-between items-center font-semibold px-2 cursor-pointer"
            >
            <span><i class="fas fa-archive"></i>  Produk</span>
            <svg
                :class="handleRotate()"
                class="fill-current text-blue-500 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
            >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
            </h2>
            <div
            x-ref="tab"
            :style="handleToggle()"
            class="overflow-hidden max-h-0 duration-500 transition-all"
            >
                <ul class="pt-2">
                    <li>
                        {{-- <form action="{{ route('seller.product-make') }}" method="POST">
                            @csrf
                            @method('POST')
                            <button>buat</button>
                        </form> --}}
                        <a href="{{ route('seller.product-create') }}" class="block pl-4 ml-2 font-bold text-gray-500 hover:text-gray-700 border-l-4 border-blue-400">Tambah produk</a>
                    </li>
                    <li>
                        <a href="{{ route('seller.product-index') }}" class="block pl-4 ml-2 font-bold text-gray-500 hover:text-gray-700 border-l-4 border-blue-400 mt-2">Daftar produk</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>