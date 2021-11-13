<div class="h-auto p-4 border-2 rounded-lg">
    <div class="flex space-x-2 border-b-2 py-2">
        <img class="w-12 rounded-full" src="{{ asset('/storage/'.Auth::user()->photo) }}" alt="">
        <div class="">
            <h1 class="hover:text-blue-400 font-bold">{{ Auth::user()->name }}</h1>
            <h4 class="text-gray-500 text-xs">Verified Account</h4>
        </div>
    </div>
    <div class="py-2">
        <div class="shadow-md">
            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                <label class="font-bold block p-5 leading-normal cursor-pointer" for="tab-multi-one">Kotak masuk</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-blue-400 leading-normal">
                    <ul class="p-2 space-y-4">
                        <li><a href="/profile/chat" class="px-4 py-1 hover:bg-gray-200">Chat</a></li>
                        <li><a href="{{ route('profile-discussion-index') }}" class="px-4 py-1 hover:bg-gray-200">Diskusi produk</a></li>
                        <li><a href="/profile/review" class="px-4 py-1 hover:bg-gray-200">Ulasan</a></li>
                        <li><a href="#" class="px-4 py-1 hover:bg-gray-200">Pesan bantuan</a></li>
                        <li><a href="#" class="px-4 py-1 hover:bg-gray-200">Pesanan dikomplain</a></li>
                        <li><a href="#" class="px-4 py-1 hover:bg-gray-200">Update</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0 " id="tab-multi-two" type="checkbox" name="tabs">
                <label class="font-bold block p-5 leading-normal cursor-pointer" for="tab-multi-two">Pembelian</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-blue-400 leading-normal">
                    <ul class="p-2 space-y-4">
                        <li><a href="#" class="px-4 py-1 hover:bg-gray-200">Menunggu pembayaran</a></li>
                        <li><a href="/profile/list-transactions" class="px-4 py-1 hover:bg-gray-200">Daftar transaksi</a></li>
                    </ul>
                </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
                <input class="absolute opacity-0 " id="tab-multi-three" type="checkbox" name="tabs">
                <label class="font-bold block p-5 leading-normal cursor-pointer" for="tab-multi-three">Profile saya</label>
                <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-blue-400 leading-normal">
                    <ul class="p-2 space-y-4">
                        <li><a href="/wishlist" class="px-4 py-1  hover:bg-gray-200">Wishlist</a></li>
                        <li><a href="#" class="px-4 py-1  hover:bg-gray-200">Toko favorit</a></li>
                        <li><a href="/profile" class="px-4 py-1  hover:bg-gray-200">Pengaturan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>