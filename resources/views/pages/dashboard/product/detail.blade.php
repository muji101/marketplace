@extends('layouts.dash')

@section('title', 'Product Detail')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Product Detail
        </h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-lg" src="/source/dist/images/profile-8.jpg">
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">Nike Air Max 270</div>
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-md">Rp5.899.000</div>
                    <div class="text-gray-600">Sport & Outdoor</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Detail</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <p>Kondisi: Baru</p>
                    <p>Berat: 100 Gram</p>
                    <p>Deskripsi: NIKE AIR MAX PATTA MONARCH
                        Size available:
                        US 9.5 / EU 43
                        Original authentic 1000% money back guaranteed
                        Local pair
                        Comes with ‘Special Box’</p>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-gray-200 dark:border-dark-5 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-5">Sales Growth</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    <div class="mr-2 w-20 flex"> USP: <span class="ml-3 font-medium text-theme-9">+23%</span> </div>
                    <div class="w-3/4 overflow-auto">
                        <canvas class="simple-line-chart-1" height="50"></canvas>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:justify-start">
                    <div class="mr-2 w-20 flex"> STP: <span class="ml-3 font-medium text-theme-6">-2%</span> </div>
                    <div class="w-3/4 overflow-auto">
                        <canvas class="simple-line-chart-2" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="nav nav-tabs flex-col sm:flex-row justify-center lg:justify-start" role="tablist"> <a id="dashboard-tab" data-toggle="tab" data-target="#dashboard" href="javascript:;" class="py-4 sm:mr-8 active" role="tab" aria-controls="dashboard" aria-selected="true">Dashboard</a> <a id="account-and-profile-tab" data-toggle="tab" data-target="#account-and-profile" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">Account & Profile</a> <a id="activities-tab" data-toggle="tab" data-target="#activities" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">Activities</a> <a id="tasks-tab" data-toggle="tab" data-target="#tasks" href="javascript:;" class="py-4 sm:mr-8" role="tab" aria-selected="false">Tasks</a> </div> --}}
    </div>
    <!-- END: Profile Info -->
@endsection