@extends('layouts.app')

@section('content')
    <div class="py-10 mx-32">
        <div class="flex justify-around items-center shadow-lg py-4 my-4 border-2 rounded-lg p-4-lg" style="background-image: url({{ asset('/storage/'.$stores->cover) }}); background-size: auto;">
                <div class="flex items-center">
                    <img class="w-24 h-24 object-cover rounded-full" src="{{ asset('/storage/'.$stores->photo) }}" alt="">
                    <div class="text-left pl-4">
                        <h1 class="font-bold text-lg">{{ $stores->name }}</h1>
                            <div>
                                {{-- online offline status --}}
                                @if (Cache::has('user-is-online-' . $stores->user->id))
                                    <span class="font-bold text-xs py-1 px-2 text-blue-500 rounded bg-blue-100">Online</span>
                                {{-- @else --}}
                                    {{-- <p class="font-bold text-md">User {{ $stores->user->name }} is Offline</p> --}}
                                    {{-- <span class="font-bold text-xs py-1 px-2 text-blue-500 rounded bg-blue-100"><span>Online</span> {{ \Carbon\Carbon::parse($stores->user->last_seen)->diffForHumans() }}</span> --}}
                                @endif
                            </div>
                            <h1 class="py-2">Dibalas -+ 1 menit | <i class="fas fa-map-marker-alt"></i> {{ $stores->address }}</h1>
                        <button
                            class="py-1 px-4 border-2 rounded-lg p-4-lg" ype="button" onclick="toggleModal('modal-example-small')">
                            Info toko
                        </button>
                    </div>
                </div>
            <div class="">
                <p>Nilai Kualitas Produk</p>
                <div class="text-gray-500">
                    0.0
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
        <div class="mx-4 h-auto">
            <!-- Tabs -->
                <ul id="tabs" class="inline-flex w-full px-1 pt-2 border-b-2">
                    <li class="px-4 py-2 -mb-px font-semibold text-gray-800 border-b-2 border-blue-400 rounded-t opacity-50"><a id="default-tab" href="#first">Produk</a></li>
                    <li class="px-4 py-2 font-semibold text-gray-800 rounded-t opacity-50"><a href="#second">Ulasan</a></li>
                </ul>
        
            <!-- Tab Contents -->
                <div id="tab-contents">
                    <div id="first">
                        <div class="grid grid-cols-4">
                            <div class="col-span-1">
                                <div class="shadow-lg border-2 rounded-lg p-4-lg p-4 mt-2 sticky top-32">
                                    <h1 class="text-lg text-left font-bold">Etalase Toko (2)</h1>
                                    <div class="text-left text-gray-600 space-y-2">
                                            <button class="text-left pl-4 bg-gray-200 rounded-lg py-2 w-full font-bold" href="#">Semua Produk</button>
                                            <button class="text-left pl-4 bg-gray-200 rounded-lg py-2 w-full" href="#">Produk Terjual</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3">
                                <div class="p-4 text-left">
                                    <h1 class="font-bold">Semua Produk</h1>
                                    {{-- <div class="flex space-x-4 my-2">
                                        <img class="w-48" src="https://assets.tokopedia.net/assets-tokopedia-lite/v2/zeus/kratos/a959bb5d.png" alt="">
                                        <div class="">
                                            <h2>Toko Anda belum memiliki produk</h2>
                                            <h4 class="text-sm text-gray-500 py-2">Yuk, isi tokomu dengan produk unggulan!</h4>
                                            <button class="bg-blue-400 rounded-lg py-2 px-4 text-white">Tambah Produk</button>
                                        </div>
                                    </div> --}}
                                    <div class="flex flex-wrap gap-2">
                                        @foreach ($products as $product)
                                            <a href="{{ route('front.product-detail', $product->id) }}" class="p-2 border-2 rounded-lg p-4-lg w-56">
                                                <img class="w-52 h-44 object-cover rounded" src="{{ asset('/storage/'.$product->galleries->first()->photo) }}" alt="">
                                                <p class="text-xs text-yellow-500 font-bold pt-2">Produk terbaru</p>
                                                <p class="text-sm py-2">{{ Str::limit($product->name, 40, '...') }}</p>
                                                <p class="font-bold text-base">Rp {{ number_format($product->price) }}</p>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="second" class="hidden border-2 rounded-lg p-4 mt-2">
                        @foreach ($products as $product)
                            @foreach ($product->review as $review)
                                <div class="grid grid-cols-10 p-2 border-2 my-2 rounded">
                                    <div class="col-span1">
                                        <div class="p-2 border-2 rounded">
                                            <img src="{{ asset('/storage/'.$review->product->galleries->first()->photo) }}" class="w-28 h-24 object-cover rounded" alt="">
                                        </div>
                                        <p class="text-blue-400 font-bold uppercase p-2 text-sm">{{ $review->product->name }}</p>
                                    </div>
                                    <div class="col-span-9 border-l-2 ml-2 p-2">
                                        <div class="">
                                            <div class="flex items-center space-x-2">
                                                <span><img class="w-6 h-6 object-cover rounded" src="{{ asset('/storage/'.$review->user->photo ) }}" alt=""></span>
                                                <span class="font-bold text-sm text-blue-500">{{ $review->user->name }}</span>
                                                <span class="text-xs bg-green-400 rounded text-white py-1 px-2 font-bold">Pembeli</span>
                                                <span class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</span>
                                            </div>
                                            <p class="py-2">
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
                                            </p>
                                            <p class="text-gray-500">{{ $review->content }}</p>
                                        </div>
                                        <div class="mt-2 border-t-2 py-2 bg-gray-100 p-2">
                                            <div class="flex items-center space-x-2 py-1">
                                                <span><img class="w-6 h-6 object-cover rounded" src="{{ asset('/storage/'.$review->product->store->photo ) }}" alt=""></span>
                                                <span class="font-bold text-xs text-blue-500">{{ $review->product->store->name }}</span>
                                                <span class="text-xs bg-blue-400 rounded text-white py-1 px-2 font-bold">Penjual</span>
                                                <span class="text-gray-500 text-xs">{{ \Carbon\Carbon::parse($review->reply->created_at)->diffForHumans() }}</span>
                                            </div>
                                            <p class="text-gray-600 text-md pl-8">
                                                {{ $review->reply->reply }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
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
                <h3 class="text-lg font-semibold">
                    Info Toko
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
                <form action="#">
                    <div class="grid grid-cols-4">
                        <div class="col-span-1">
                            <div class="py-2">
                                <label class="font-bold text-gray-500 text-md">Deskripsi Toko</label>
                                <p class="text-gray-800">{!! $stores->description !!}</p>
                            </div>
                            <div class="py-2">
                                <label class="font-bold text-gray-500 text-md">Alamat Toko</label>
                                <p class="text-gray-800">{{ $stores->address }}</p>
                            </div>
                            <div class="py-2">
                                <label class="font-bold text-gray-500 text-md">Buka Sejak</label>
                                <p class="text-gray-800">{{ $stores->created_at->isoFormat('D MMMM Y'); }}</p>
                            </div>
                        </div>
                        <div class="col-span-3 pl-4">
                            <h1 class="font-bold py-2">Layanan Pengiriman</h1>
                            <div class="flex flex-wrap gap-4">
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-indopaket.png" alt="Indo Paket">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">Indo Paket</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs">  </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-gosend.png" alt="GoSend">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">GoSend</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Same Day, Instant Courier </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-sicepat.png" alt="SiCepat">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">SiCepat</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Regular Package, BEST, GOKIL, HALU </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-custom.png" alt="Custom Logistik">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">Custom Logistik</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Service Normal </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-jnt.png" alt="J&amp;T">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">J&amp;T</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Reguler </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-anteraja.png" alt="AnterAja">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">AnterAja</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Reguler, Next Day, Same Day, Economy, Cargo </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-jne.png" alt="JNE">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">JNE</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Reguler, OKE, YES, JNE Trucking </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-2 rounded-lg p-4">
                                    <div data-testid="pdpFlexWrapperContainer" class="flex space-x-2 items-center">
                                        <div class="css-t92feo e1ufc1ph0">
                                            <div class="w-14">
                                                <img src="https://ecs7.tokopedia.net/img/kurir-grab.png" alt="GrabExpress">
                                            </div>
                                        </div>
                                        <div class="css-lln2y3 e1ufc1ph0">
                                            <h5 data-unify="Typography" class="font-bold text-sm">GrabExpress</h5>
                                            <p data-unify="Typography" class="text-gray-800 text-xs"> Same Day, Instant </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection


@push('after-script')
    <script type="text/javascript">
        function toggleModal(modalID) {
        document.getElementById(modalID).classList.toggle("hidden");
        document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
        document.getElementById(modalID).classList.toggle("flex");
        document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script>

    <script>
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                    setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
            }
            };
        }
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
