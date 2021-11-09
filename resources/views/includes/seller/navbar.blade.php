    <div class="sticky top-0 z-50 bg-white mx-auto px-16 shadow-md">
        <div class="grid grid-cols-12 py-4 items-center">
        <div class="col-span-2">
            <a href="/seller" class="text-blue-500 font-bold text-2xl">
                Tokobilu<span class="text-gray-700">Seller</span>
            </a>
        </div>
        <div class="col-span-8 flex w-full pl-10">
            <div class="relative text-gray-600 w-full">
            <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full border-2">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                </svg>
            </button>
            </div>
        </div>
        <div class="col-span-2 flex flex-column justify-center items-center space-x-8 text-gray-500">
            <div class="dropdown inline px-2 py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer font-bold text-base tracking-wide">
                <div class="relative">
                    <a><i class="fas fa-bell"></i></a>
                    <span class="absolute top-0 -right-3 bg-blue-500 px-1 rounded-full text-white text-xs ">1</span>
                </div>
                <div class="dropdown-menu absolute hidden w-72 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md h-96 overflow-y-auto">
                        <div class="border-b-2 flex items-center justify-between">
                            <h1 class="">Notifikasi</h1>
                            <a href="/profile" class="text-base"><i class="fas fa-cog"></i></a>
                        </div>
                        <div class="flex items-end justify-between py-2">
                            <h1 class="text-sm">Penjualan</h1>
                            <a href="#"  class="text-xs text-green-400 font-normal">Lihat semua</a>
                        </div>
                        <div class="py-4 text-xs font-normal border-b-2">
                            <div class="flex py-2">
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/icarus/kratos/fd2357a5.svg" alt="">
                                    Pesanan Baru
                                </div>
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/icarus/kratos/f1e5609e.svg" alt="">
                                    Siap Kirim
                                </div>
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/icarus/kratos/bf6addd5.svg" alt="">
                                    Sedang dikirim
                                </div>
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/icarus/kratos/d2fac305.svg" alt="">
                                    Sampai tujuan
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            <h2  class="text-sm">Untuk kamu</h2>
                            <div class="text-center">
                                <img class="my-2" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/4ac40a43.jpg" alt="">
                                <h3 class="text-sm">Belum ada notifikasi</h3>
                                <p class="my-2 text-xs font-normal">Notifikasi terkait transaksi kamu bakal muncul di sini</p>
                                <a href="#" class="text-xs text-white py-2 px-4  bg-green-400 rounded-lg w-full">Mulai belanja</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdown inline px-2 py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer text-base tracking-wide">
                <div class="flex items-center space-x-2">
                    <img class="h-6 rounded-full" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt=""> 
                    <p class="text-gray-500 text-md">{{ Auth::user()->name }}</p>
                </div>
                <div class="dropdown-menu absolute hidden w-60 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md">
                        <a href="/store" class="flex items-center space-x-2">
                            <img class="w-12 rounded-full p-2" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                            <div>
                                <p class="font-bold text-sm">{{ Auth::user()->name }}</p>
                                <p class="font-bold text-xs"><i class="fas fa-store"></i> {{ Auth::user()->store->name }}</p>
                            </div>
                        </a>
                        <div class="py-2 space-y-1">
                            <div class="py-2 border-t-2">
                                <a href="/" class="py-2 text-sm"><i  class="fas fa-bag"></i>Kembali ke Tokobilu</a>
                            </div>
                            <div class="py-1 border-t-2">
                                <a href="/profile" class="py-2 text-md font-bold"><i  class="fas fa-cog"></i>Pengaturan Akun</a>
                            </div>
                            <div class="py-1">
                                <a href="/seller" class="py-2 text-md font-bold"><i class="fas fa-sign-out-alt"></i> Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </div>
    </div>