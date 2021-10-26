@extends('layouts.dash')

@section('title', 'User Detail')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            User Detail
        </h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="photo profile" class="rounded-full" src="{{ asset('/storage/'.$users->photo) }}">
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $users->name }}</div>
                    <div class="text-gray-600">{{ $users->role }}</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-4">Personal data</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="calendar" class="w-4 h-4 mr-2"></i> {{ $users->country }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="user-check" class="w-4 h-4 mr-2"></i>{{ $users->gender === "L" ? 'Laki-laki' : 'Perempuan'  }}</div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="mail" class="w-4 h-4 mr-2"></i>{{ $users->email }} </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="phone" class="w-4 h-4 mr-2"></i> {{ $users->phone }} </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-t lg:border-0 border-gray-200 dark:border-dark-5 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-4">Address</div>
                <div class="flex items-center justify-center lg:justify-start mt-2">
                    @if (isset($user->village))
                        <p class="uppercase">
                            {{ $user->village->name }}, {{ $user->district->name }}, {{ $user->regency->name }}, {{ $user->province->name }}, {{ $user->zip_code }}, {{ $user->country }}
                        </p>
                    @else
                        <p class="uppercase">Tidak ada alamat</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection