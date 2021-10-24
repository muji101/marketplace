
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
        <div class="col-span-6 flex">
            <div class="relative text-gray-600 w-full">
            <input type="search" name="serch" placeholder="Search" class="bg-white h-10 px-5 pr-10 rounded-full text-sm w-full border-2">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                </svg>
            </button>
            </div>
        </div>
        <div class="col-span-1 flex flex-column justify-center items-center space-x-8 text-gray-500">
            {{-- <a href="/cart"><i class="fas fa-shopping-cart"></i></a> --}}
            <div class="dropdown inline px-2 py-1 rounded text-gray-500 hover:text-gray-700 hover:bg-gray-200 cursor-pointer font-bold text-base tracking-wide">
                <a><i class="fas fa-shopping-cart"></i></a>
                <div class="dropdown-menu absolute hidden w-96 text-gray-700  h-auto flex pt-4">
                    <div class="transform -translate-x-1/2 block w-full bg-white shadow p-4  rounded-md">
                        <div class="text-center">
                            <img class="my-2 mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/4ac40a43.jpg" alt="">
                            <h3 class="text-sm">Wah keranjang belanjaanmu kosong!</h3>
                            <p class="my-2 text-xs font-normal">Daripada dianggurin, isi saja dengan barang-barang menarik. Lihat-lihat dulu, siapa tahu ada yang kamu suka!</p>
                            {{-- <a href="#" class="text-xs text-white py-2 px-4  bg-red-400 rounded-lg w-full">Mulai belanja</a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-span-1 flex items-center border-l-2 space-x-2 pl-10">
            <div class="py-2">
                <a href="/login" class="border-2 border-red-400 py-2 px-4 rounded-lg text-red-400 font-bold">Masuk</a>
            </div>
            <div class="py-2">
                <a href="/login" class=" py-2 px-4 rounded-lg bg-red-400 text-white font-bold ring-2 ring-red-400">Daftar</a>
            </div>
        </div>
        </div>
    </div>