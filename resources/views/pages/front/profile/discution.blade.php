@extends('pages.front.profile.app')

@push('content')
<h1 class="px-4 py-4 font-bold text-base">Diskusi</h1>
<div class="mx-4 h-auto p-4 border-2 rounded-lg bg-green-50">
    <div class="flex items-center space-x-2 pb-4">
        <img class="w-16 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/21/11854455-cdd0-42ee-b4a3-4cc8a9eca69a.jpg" alt="">
        <div class="">
            <p class="text-gray-600 hover:text-green-400">Handsfree Bluetooth I7S TWS Sport True Wireless Airpods I7S V5.0</p>
            <p class="font-bold">Rp31.500</p>
        </div>
    </div>
    <hr>
    <div class="grid grid-cols-12 pt-4">
        <div class="col-span-1">
            <img class="w-16 rounded-full" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
        </div>
        <div class="col-span-11">
            <div class="py-2">
                <p class="text-gray-600">Muji <span class="px-2 py-1 bg-gray-100 rounded text-xs">Kamu</span></p>
                <p class="font-bold">baterai bisa bertahan berapa jam?</p>
            </div>
            <div class="flex items-center space-x-2 border-l-4 pl-2 my-2">
                <img class="w-16 rounded-lg" src="https://images.tokopedia.net/img/cache/215-square/shops-1/2019/3/20/4804373/4804373_debb02f2-f03a-4b54-87b2-8a87941f9937.png" alt="">
                <div class="">
                    <p class="text-gray-600 hover:text-green-400">T-Men Accessories<span class="px-2 py-1 bg-gray-50 text-green-500 font-bold rounded text-xs">Penjual</span></p>
                    <p>3-4 jam</p>
                </div>
            </div>
            <div class="py-2">
                <input type="text" class="w-full p-2 rounded-lg" placeholder="Balas diskusi... ">
            </div>
        </div>
    </div>
</div>
@endpush