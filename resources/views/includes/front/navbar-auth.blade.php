
    <div class="sticky top-0 z-10 bg-white mx-auto px-16 my-4  shadow-md">
        <div class="grid grid-cols-12 py-4 items-center">
        <div class="col-span-2 mx-auto">
            <a href="/" class="text-red-500 font-bold text-2xl">
                {{-- <img src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/e5b8438b.svg" alt=""> --}}
                TokoMerah
            </a>
        </div>
        <div class="col-span-1 text-gray-500">
            {{-- <a href="/category">Kategori</a> --}}
            <div class="dropdown inline rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer font-bold text-base tracking-wide">
                <div class="relative">
                    {{-- <a><i class="fas fa-shopping-cart"></i></a> --}}
                    <span>Kategori</span>
                    {{-- <span class="absolute top-0 -right-3 bg-red-500 px-1 rounded-full text-white text-xs ">1</span> --}}
                </div>
                <div class="dropdown-menu absolute hidden w-screen text-gray-700 flex pt-4">
                    <div class="transform -translate-x-80 block w-full bg-white shadow p-4  rounded-md">
                        <div class="grid grid-cols-12 h-96">
                            <div class="col-span-2 p-2 h-full overflow-auto">
                                <ul  id="tabs1">
                                    <li><a id="default-tab1" href="#1" class="p-2 hover:bg-gray-100 text-sm rounded block">Buku</a></li>
                                    <li><a href="#2" class="p-2 hover:bg-gray-100 text-sm rounded block">Dapur</a></li>
                                    <li><a href="#3" class="p-2 hover:bg-gray-100 text-sm rounded block">Elektronik</a></li>
                                    {{-- <li><a href="#4" class="p-2 hover:bg-gray-100 text-sm rounded block">Fashion Anak & Bayi</a></li>
                                    <li><a href="#5" class="p-2 hover:bg-gray-100 text-sm rounded block">Fashion Muslim</a></li>
                                    <li><a href="#6" class="p-2 hover:bg-gray-100 text-sm rounded block">Fashion Pria</a></li>
                                    <li><a href="#7" class="p-2 hover:bg-gray-100 text-sm rounded block">Fashion Wanita</a></li>
                                    <li><a href="#8" class="p-2 hover:bg-gray-100 text-sm rounded block">Film & Musik</a></li>
                                    <li><a href="#9" class="p-2 hover:bg-gray-100 text-sm rounded block">Gaming</a></li>
                                    <li><a href="#10" class="p-2 hover:bg-gray-100 text-sm rounded block">Handphone & Table</a></li>
                                    <li><a href="#11" class="p-2 hover:bg-gray-100 text-sm rounded block">Ibu & Bayi</a></li>
                                    <li><a href="#12" class="p-2 hover:bg-gray-100 text-sm rounded block">Kamera</a></li> --}}
                                </ul>
                            </div>
                            <div class="col-span-10 h-full overflow-auto">
                                <div id="tab-contents1">
                                    <div  id="1" >
                                        <div class="p-4 flex space-x-2 items-center">
                                            <img class="w-10" src="https://ecs7.tokopedia.net/img/attachment/2021/6/23/75549537/75549537_664b5500-f439-4a8a-902c-f0bee5f76450.png" alt="">
                                            <p>Buku</p>
                                        </div>
                                        <ul class="p-4">
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Arsitektur & Desain</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Buku Persiapan Ujian</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Kedokteran</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Majalah</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Pertanian</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Buku Remaja dan Anak</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Keluarga</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Religi & Spiritual</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Gaming</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Handphone & Table</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Ibu & Bayi</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Kamera</a></li>
                                        </ul>
                                    </div>
                                    <div  id="2" class="hidden">
                                        <div class="p-4 flex space-x-2 items-center">
                                            <img class="w-10" src="https://ecs7.tokopedia.net/img/attachment/2021/6/24/75549537/75549537_b0890f17-f5fc-4f09-898c-cd0106bfa271.png" alt="">
                                            <p>Dapur</p>
                                        </div>
                                        <ul class="p-4">
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Arsitektur & Desain</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Buku Persiapan Ujian</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Kedokteran</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Majalah</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Pertanian</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Buku Remaja dan Anak</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Keluarga</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Religi & Spiritual</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Gaming</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Handphone & Table</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Ibu & Bayi</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Kamera</a></li>
                                        </ul>
                                    </div>
                                    <div  id="3" class="hidden">
                                        <div class="p-4 flex space-x-2 items-center">
                                            <img class="w-10" src="https://ecs7.tokopedia.net/img/WgKiGm/2021/6/23/303e697b-5e60-4367-bfb2-31be809fb710.png" alt="">
                                            <p>Elektronik</p>
                                        </div>
                                        <ul class="p-4">
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Arsitektur & Desain</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Buku Persiapan Ujian</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Kedokteran</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Majalah</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Pertanian</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Buku Remaja dan Anak</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Keluarga</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Religi & Spiritual</a></li>
                                            <li><a href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Gaming</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Handphone & Table</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Ibu & Bayi</a></li>
                                            <li><a  href="#" class="p-2 hover:bg-gray-100 text-sm rounded block">Kamera</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-5 flex">
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
            {{-- <a href="/cart"><i class="fas fa-shopping-cart"></i></a> --}}
            <div class="dropdown inline px-2 py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer font-bold text-base tracking-wide">
                <div class="relative">
                    <a><i class="fas fa-shopping-cart"></i></a>
                    <span class="absolute top-0 -right-3 bg-red-500 px-1 rounded-full text-white text-xs ">1</span>
                </div>
                <div class="dropdown-menu absolute hidden w-96 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md">
                        <div class="border-b-2 flex items-center justify-between">
                            <h1 class="">Keranjang</h1>
                            <a href="/cart" class="text-red-400 text-xs">Lihat sekarang</a>
                        </div>
                        <div class="flex items-center space-x-4 py-2">
                            <img class="w-12" src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/11/48690432/48690432_73f8cf51-8be9-4323-8850-0df7f71abfc8_800_800" alt="">
                            <div class="">
                                <h2 class="hover:text-red-400 text-sm">Korek Api Kompor - Lighter Peman...</h2>
                                <h5  class="text-xs font-normal">1 Barang (70gr)</h5>
                            </div>
                            <h2 class="text-yellow-500">Rp6.350</h2>
                        </div>
                        <div class="flex items-center space-x-4 py-2">
                            <img class="w-12" src="https://ecs7.tokopedia.net/img/cache/700/product-1/2020/7/11/48690432/48690432_73f8cf51-8be9-4323-8850-0df7f71abfc8_800_800" alt="">
                            <div class="">
                                <h2 class="hover:text-red-400 text-sm">Korek Api Kompor - Lighter Peman...</h2>
                                <h5  class="text-xs font-normal">1 Barang (70gr)</h5>
                            </div>
                            <h2 class="text-yellow-500">Rp6.350</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown inline px-2 py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer font-bold text-base tracking-wide">
                <div class="relative">
                    <a><i class="fas fa-bell"></i></a>
                    <span class="absolute top-0 -right-3 bg-red-500 px-1 rounded-full text-white text-xs ">1</span>
                </div>
                <div class="dropdown-menu absolute hidden w-72 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md h-96 overflow-y-auto">
                        <div class="border-b-2 flex items-center justify-between">
                            <h1 class="">Notifikasi</h1>
                            <a href="/profile" class="text-base"><i class="fas fa-cog"></i></a>
                        </div>
                        <div class="flex items-end justify-between py-2">
                            <h1 class="text-sm">Pembelian</h1>
                            <a href="#"  class="text-xs text-red-400 font-normal">Lihat semua</a>
                        </div>
                        <div class="py-4 text-xs font-normal border-b-2">
                            <h2>Menunggu pembayaran</h2>
                            <div class="flex py-2">
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/5e972574.svg" alt="">
                                    Menunggu konfirmasi
                                </div>
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/7764102f.svg" alt="">
                                    Pesanan diproses
                                </div>
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/a39f2a72.svg" alt="">
                                    Sedang dikirim
                                </div>
                                <div class="text-center">
                                    <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/b590a65c.svg" alt="">
                                    Sampai tujuan
                                </div>
                            </div>
                        </div>
                        <div class="py-4 border-b-4">
                            <h2  class="text-sm">Penjualan</h2>
                            <p class="py-2 text-xs font-normal">Cek pesanan yang masuk dan perkembangan tokomu secara rutin di satu tempat</p>
                            <button href="#" class="text-sm text-red-600 my-1 border-2 border-red-500 rounded-lg w-full">Masuk ke Tokomerah seller</button>
                        </div>
                        <div class="py-4">
                            <h2  class="text-sm">Untuk kamu</h2>
                            <div class="text-center">
                                <img class="my-2" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/4ac40a43.jpg" alt="">
                                <h3 class="text-sm">Belum ada notifikasi</h3>
                                <p class="my-2 text-xs font-normal">Notifikasi terkait transaksi kamu bakal muncul di sini</p>
                                <a href="#" class="text-xs text-white py-2 px-4  bg-red-400 rounded-lg w-full">Mulai belanja</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="dropdown inline px-2 py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer font-bold text-base tracking-wide">
                <a><i class="fas fa-envelope"></i></a>
                <div class="dropdown-menu absolute hidden w-60 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md">
                        <div class="flex flex-col text-xs font-normal">
                            <a href="" class="hover:bg-gray-200 rounded px-2 py-1">Chat</a>
                            <a href="/profile/discution" class="hover:bg-gray-200 rounded px-2 py-1">Diskusi</a>
                            <a href="/profile/review" class="hover:bg-gray-200 rounded px-2 py-1">Ulasan</a>
                            <a href="" class="hover:bg-gray-200 rounded px-2 py-1">Pesan bantuan</a>
                            <a href="" class="hover:bg-gray-200 rounded px-2 py-1">Pesan dikomplain</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-span-1 flex items-center border-l-2">
            <div class="dropdown inline px-2 py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer text-base tracking-wide">
                <div class="flex items-center space-x-2">
                    <img class="h-8 rounded-full" src="https://images.tokopedia.net/img/seller_no_logo_3.png" alt=""> 
                    <p class="text-gray-500 text-sm">mystore.id</p>
                </div>
                <div class="dropdown-menu absolute hidden w-96 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md">
                        <a href="/store" class="border-b-2 flex items-center space-x-2">
                            <img class="w-12" src="https://images.tokopedia.net/img/seller_no_logo_3.png" alt="">
                            <div>
                                <p class="font-bold text-sm">mystore.id</p>
                                <p class="font-bold text-xs">Regular merchant</p>
                            </div>
                        </a>
                        <div class="py-2">
                            <h1 class="font-bold">Tokomerah seller</h1>
                            <p  class="text-xs py-2">Pantau pesanan yang masuk dan cek perkembangan tokomu secara rutin di satu tempat.</p>
                            <div class="text-center bg-red-400 rounded-md py-1">
                                <a href="/seller" target="_blank" class=" text-white font-bold text-sm">Cek Tokomerah Seller</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            {{-- <h6 class="px-4 py-1 font-bold rounded-full bg-red-400 text-gray-50 text-sm">Buka toko</h6> --}}
        </div>
        <div class="col-span-1 ml-2">
            {{-- <a href="/profile" class="flex justify-center items-center">
                <img class="h-8 rounded-full" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                <h6 class="pl-2 text-gray-500 text-sm">Muji kuwat</h6>
            </a> --}}
            <div class="dropdown inline py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer text-base tracking-wide">
                <div class="flex items-center space-x-2">
                    <img class="h-6 rounded-full" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt=""> 
                    <p class="text-gray-500 text-sm">Muji kuwat</p>
                </div>
                <div class="dropdown-menu absolute hidden w-60 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md">
                        <a href="/profile" class="border-b-2 flex items-center space-x-2">
                            <img class="w-12 rounded-full p-2" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
                            <div>
                                <p class="font-bold text-sm">Muji kuwat</p>
                                <p class="font-bold text-xs">Regular merchant</p>
                            </div>
                        </a>
                        <div class="py-2 space-y-1 text-center">
                            <div class="py-1 bg-gray-100 rounded">
                                <a href="/profile/list-transactions" class="py-2 px-4 text-sm"><i  class="fas fa-bag"></i>Pembelian</a>
                            </div>
                            <div class="py-1 bg-gray-100 rounded">
                                <a href="/wishlist" class="py-2 px-4 text-sm"><i  class="fas fa-bag"></i>Wishlist</a>
                            </div>
                            <div class="py-1 bg-gray-100 rounded">
                                <a href="/profile" class="py-2 px-4 text-sm"><i  class="fas fa-settings"></i>Pengaturan</a>
                            </div>
                            <div class="text-center bg-red-400 rounded-md py-1">
                                <a href="/seller" class=" text-white font-bold text-sm">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>