@extends('layouts.sell')

@section('title', 'Discution')

@section('content')

<h2 class="font-bold text-lg font-medium mt-10 pl-4">
    Discutions
</h2>
<div class="mx-4 h-auto p-4 border-2 rounded-lg bg-red-50">
    <div class="flex items-center b-4">
        <img class="w-12 rounded-lg" src="https://ecs7.tokopedia.net/img/cache/200-square/VqbcmM/2021/9/21/11854455-cdd0-42ee-b4a3-4cc8a9eca69a.jpg" alt="">
        <div class="pl-4">
            <p class="text-gray-600 hover:text-red-400">Handsfree Bluetooth I7S TWS Sport True Wireless Airpods I7S V5.0</p>
            <p class="font-bold">Rp31.500</p>
        </div>
    </div>
    <hr>
    <div class="flex pt-4">
        <div class="">
            <img class="w-12 rounded-full" src="https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-21.jpg" alt="">
        </div>
        <div class="w-full px-4">
            <div class="py-2">
                <p class="text-gray-600">Muji<span class="px-2 py-1 font-bold text-xs">Pembeli</span></p>
                <p class="font-bold text-gray-700">baterai bisa bertahan berapa jam?</p>
            </div>
            <div class="flex items-center my-2">
                <img class="w-12 rounded-lg" src="https://images.tokopedia.net/img/cache/215-square/shops-1/2019/3/20/4804373/4804373_debb02f2-f03a-4b54-87b2-8a87941f9937.png" alt="">
                <div class="pl-4">
                    <p class="text-gray-600 hover:text-red-400">T-Men Accessories<span class="px-2 py-1 font-bold text-xs">Kamu</span></p>
                    <p class="text-gray-700">3-4 jam</p>
                </div>
            </div>
            <div class="py-2">
                <input type="text" class="w-full p-2 rounded-lg" placeholder="Balas diskusi... ">
            </div>
        </div>
    </div>
</div>
@endsection