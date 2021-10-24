<div class="w-full my-1">
    <div class="flex items-center font-bold space-x-2 border-b-2 py-4">
        <img class="w-12 rounded-full shadow-lg" src="https://images.tokopedia.net/img/seller_no_logo_3.png" alt="">
        <span class="pl-1">Onotokkoqu</span>
    </div>
    <ul class="flex flex-col">
        <li class="mt-3 text-red-400 border-l-4 border-red-400">
            <a href="/seller" class="font-semibold p-3 cursor-pointer"><i class="fas fa-home"></i> Home</a>
        </li>
        <li class="mt-3">
            <a href="/seller/chats" class="font-semibold p-3 cursor-pointer"><i class="fas fa-comment-dots"></i> Chat</a>
        </li>
        <li class="mt-3">
            <a href="/seller/discutions" class="font-semibold p-3 cursor-pointer"><i class="fas fa-comments"></i> Diskusi</a>
        </li>
        <li class="mt-3">
            <a href="/seller/sales" class="font-semibold p-3 cursor-pointer"><i class="fas fa-balance-scale-right"></i> Penjualan</a>
        </li>
        <li class="mt-3">
            <a href="/seller/reviews" class="font-semibold p-3 cursor-pointer"><i class="fas fa-blog"></i> Kata Pembeli</a>
        </li>
        <li class="mt-3">
            <a href="/seller/store" class="font-semibold p-3 cursor-pointer"><i class="fas fa-cog"></i> Pengaturan Toko</a>
        </li>
        <li class="bg-white mt-3" x-data="accordion(1)">
            <h2
            @click="handleClick()"
            class="flex flex-row justify-between items-center font-semibold px-3 cursor-pointer"
            >
            <span><i class="fas fa-archive"></i>  Produk</span>
            <svg
                :class="handleRotate()"
                class="fill-current text-red-500 h-6 w-6 transform transition-transform duration-500"
                viewBox="0 0 20 20"
            >
                <path d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"></path>
            </svg>
            </h2>
            <div
            x-ref="tab"
            :style="handleToggle()"
            class="border-l-4 border-red-400 overflow-hidden max-h-0 duration-500 transition-all"
            >
                <ul>
                    <li>
                        <a href="/seller/product-create" class="pl-6 font-bold text-gray-500">Tambah produk</a>
                    </li>
                    <li>
                        <a href="/seller/products" class="pl-6 font-bold text-gray-500">Daftar produk</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</div>