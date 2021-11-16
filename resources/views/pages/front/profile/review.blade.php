@extends('pages.front.profile.app')

@push('content')
<div class="mx-4 h-auto p-4 border-2 rounded-lg">
    <!-- Tabs -->
        <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
            <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">Menunggu Diulas</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Ulasan Saya</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#third">Ulasan Pembeli</a></li>
            <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#fourth">Penalti dan Reward</a></li>
        </ul>

    <!-- Tab Contents -->
        <div id="tab-contents">
            <div id="first" class="p-4">
                <div class="flex space-x-2 items-center justify-between">
                    <div class="flex items-center">
                        <img class="w-24" src="https://ecs7.tokopedia.net/img/cache/100-square/product-1/2019/11/13/7766400/7766400_bc88909b-f9ab-44a1-89fa-b2beb8f0fa67_690_690.webp" alt="">
                        <div class="px-2">
                            <p class="font-bold">Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</p>
                            <p>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                                <i class="text-yellow-400 fas fa-star"></i>
                            </p>
                        </div>
                    </div>
                    <div>
                        <button
                        class="bg-blue-400 rounded py-2 px-4 text-white font-bold"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Beri ulasan
                    </button>
                    </div>
                </div>
            </div>
            <div id="second" class="hidden">
                <div class="border-2 rounded mt-2">
                    <div class="border-b-2 flex justify-between p-2 bg-gray-100 text-gray-500">
                        <span>INV/20210706/MPL/1385205190</span>
                        <span>Pesanan diterima: 07 Jul 2021, 11:48</span>
                    </div>
                    <div class="p-4 grid grid-cols-3">
                        <div class="col-span-1">
                            <div class="flex space-x-4 items-center py-2">
                                <div class="w-12">
                                    <img class="w-auto" src="https://images.tokopedia.net/img/cache/215-square/shops-1/2019/12/5/942270/942270_30637b28-4faa-4519-a587-62888c81ef05.jpg" alt="">
                                </div>
                                <div class="">
                                    <p>Absolutek Comp</p>
                                    <span class="text-xs px-2 py-1 bg-blue-400 rounded">Penjual</span>
                                </div>
                                <a href="#" class="bg-blue-400 rounded px-4 text-sm font-bold text-white">Follow</a>
                            </div>
                            <div class="py-2 mx-2 text-center text-gray-400 text-sm  border-b-2  border-t-2">
                                <p>Penilaian Anda</p>
                                <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/1b7ee0f2.svg" alt="">
                                <p>puas</p>
                            </div>
                        </div>
                        <div class="col-span-2 border-l-2 px-2">
                            <h1 class="font-bold pb-2">Daftar produk</h1>
                            <div class="flex space-x-2 items-center">
                                <div class="w-24">
                                    <img class="w-full" src="https://ecs7.tokopedia.net/img/cache/100-square/product-1/2019/11/13/7766400/7766400_bc88909b-f9ab-44a1-89fa-b2beb8f0fa67_690_690.webp" alt="">
                                </div>
                                <div class="w-80">
                                    <p class="font-bold">Tp-link TL WN725N : 150Mbps Wireless N Nano Wireless N Nano</p>
                                    <p>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                    </p>
                                </div>
                                <div>
                                    <a href="#" class="bg-blue-400 rounded py-2 px-4 text-white font-bold">Lihat ulasan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-2 rounded mt-2">
                    <div class="border-b-2 flex justify-between p-2 bg-gray-100 text-gray-500">
                        <span>INV/20210706/MPL/1385205190</span>
                        <span>Pesanan diterima: 07 Jul 2021, 11:48</span>
                    </div>
                    <div class="p-4 grid grid-cols-3">
                        <div class="col-span-1">
                            <div class="flex space-x-4 items-center py-2">
                                <div class="w-12">
                                    <img class="w-auto" src="https://images.tokopedia.net/img/cache/215-square/shops-1/2019/10/21/1206721/1206721_13e9dca2-872f-43c9-8b6c-b1ff0d026a24.png" alt="">
                                </div>
                                <div class="">
                                    <p class="text-sm">Blue Sky Communication</p>
                                    <span class="text-xs px-2 py-1 bg-blue-400 rounded">Penjual</span>
                                </div>
                                <a href="#" class="bg-blue-400 rounded px-4 text-sm font-bold text-white">Follow</a>
                            </div>
                            <div class="py-2 mx-2 text-center text-gray-400 text-sm  border-b-2  border-t-2">
                                <p>Penilaian Anda</p>
                                <img class="mx-auto" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/1b7ee0f2.svg" alt="">
                                <p>puas</p>
                            </div>
                        </div>
                        <div class="col-span-2 border-l-2 px-2">
                            <h1 class="font-bold pb-2">Daftar produk</h1>
                            <div class="flex space-x-2 items-center">
                                <div class="w-24">
                                    <img class="w-full" src="https://ecs7.tokopedia.net/img/cache/200-square/product-1/2019/11/19/9984113/9984113_51ac854f-bcc2-4a90-951a-0b0324404fc1_1995_1995" alt="">
                                </div>
                                <div class="w-80">
                                    <p class="font-bold">HANDSFREE HEADSET EARPHONE SPECTRUM VIRAL SUPER BASS MURAH</p>
                                    <p>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                        <i class="text-yellow-400 fas fa-star"></i>
                                    </p>
                                </div>
                                <div>
                                    <a href="#" class="bg-blue-400 rounded py-2 px-4 text-white font-bold">Lihat ulasan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="third" class="hidden border-2 rounded mt-2">
                <div class="border-b-2 flex justify-between p-2 bg-gray-100">
                    <span>Pembeli</span>
                    <span>Pesan diterima: 17 Nov 2021, 12:08</span>
                </div>
                <div class="p-4">
                    <div class="grid grid-cols-6">
                        <div class="col-span-1">
                            <img src="https://ecs7.tokopedia.net/img/cache/100-square/product-1/2019/11/13/7766400/7766400_bc88909b-f9ab-44a1-89fa-b2beb8f0fa67_690_690.webp" alt="">
                        </div>
                        <div class="col-span-5">
                            <p class="font-bold">Tp-link TL WN725N : 150Mbps Wireless N Nano USB Adapter N USB Wifi</p>
                            <p>
                                    <i class="text-yellow-400 fas fa-star"></i>
                                    <i class="text-yellow-400 fas fa-star"></i>
                                    <i class="text-yellow-400 fas fa-star"></i>
                                    <i class="text-yellow-400 fas fa-star"></i>
                                    <i class="text-yellow-400 fas fa-star"></i>
                            </p>
                            <p class="text-gray-500 py-4">Mantap produk sesuai pesanan dan nyaman dipakai, pengiriman cepat dan respon toko sangat ramah</p>
                            <span class="text-gray-500">17 Nov 2021, 12:08</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fourth" class="hidden p-4">
                Fourth tab
            </div>
        </div>

        <!-- Modal  address-->
    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-example-small">
        <div class="relative w-auto my-6 mx-auto max-w-xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
            <!--header-->
            <div class="flex items-start justify-between p-5 border-b border-solid border-gray-200 rounded-t">
                <h3 class="text-lg font-semibold">
                    Berikan ulasan terbaik anda
                </h3>
                <button
                class="p-1 ml-auto bg-transparent border-0 text-gray-300 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                onclick="toggleModal('modal-example-small')">
                <span class="bg-transparent h-6 w-6 text-2xl block outline-none focus:outline-none">
                    <i class="fas fa-times"></i>
                </span>
                </button>
            </div>
            <form action="{{ route('profile-review-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="p-4">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="product_id" value="1">
                    <div class="flex space-x-4">
                        <div class="py-1 w-1/2">
                            <label class="font-bold text-gray-500 text-md">Foto Produk</label>
                            <input name="photo" type="file" class="p-2 w-full border rounded-lg" placeholder="Tulis nama penerima">
                        </div>
                        <div class="py-1 w-1/2">
                            <div class="font-bold text-gray-500 text-md">Rating</div>
                            <ul class="rate-area pt-1">
                                <input type="radio" id="5-star" name="rating" value="5">
                                <label for="5-star" title="Amazing">5 stars</label>
                                <input type="radio" id="4-star" name="rating" value="4">
                                <label for="4-star" title="Good">4 stars</label>
                                <input type="radio" id="3-star" name="rating" value="3">
                                <label for="3-star" title="Average">3 stars</label>
                                <input type="radio" id="2-star" name="rating" value="2">
                                <label for="2-star" title="Not Good">2 stars</label>
                                <input type="radio" id="1-star" required="" name="rating" value="1" aria-required="true">
                                <label for="1-star" title="Bad">1 star</label>
                            </ul>
                        </div>
                    </div>
                    <div class="py-1">
                        <label class="font-bold text-gray-500 text-md">Masukkan ulasan anda di sini</label>
                        <textarea name="content" class="w-full p-2 block border rounded-lg" placeholder="Tulis nama jalan, nomor rumah, nomor kompleks, nama gedung"></textarea>
                    </div>
                </div>
            <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-gray-200 rounded-b">
                    <button
                        class="text-blue-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="button" onclick="toggleModal('modal-example-small')">
                        Batal
                    </button>
                    <button
                        class="bg-blue-500 text-white active:bg-blue-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                        type="submit" onclick="toggleModal('modal-example-small')">
                        Kirim Ulasan
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-example-small-backdrop"></div>

</div>
@endpush

@push('after-style')
    <style>
        .rate-area {
    float:left;
    border-style: none;
}

.rate-area:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rate-area:not(:checked) > label {
    float: right;
    width: .80em;
    overflow: hidden;
    white-space: nowrap;
    cursor: pointer;
    font-size: 40px;
    line-height: 32px;
    color: lightgrey;
    margin-bottom: 10px !important;
}

.rate-area:not(:checked) > label:before {
    content: '★';
}

.rate-area > input:checked ~ label {
    color: rgb(255, 187, 0);
    text-shadow: none;
}

.rate-area:not(:checked) > label:hover,
.rate-area:not(:checked) > label:hover ~ label {
    color: rgb(255, 187, 0);
    
}

.rate-area > input:checked + label:hover,
.rate-area > input:checked + label:hover ~ label,
.rate-area > input:checked ~ label:hover,
.rate-area > input:checked ~ label:hover ~ label,
.rate-area > label:hover ~ input:checked ~ label {
    color: #e8262d;
    text-shadow: none;
    
}

.rate-area > label:active {
    position:relative;
    top:0px;
    left:0px; 
}
    </style>
@endpush

@push('after-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript">
    function toggleModal(modalID) {
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
    }

    $(':radio').change(function() {
    console.log('New star rating: ' + this.value);
    });
</script>
@endpush