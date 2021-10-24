@extends('layouts.dash')

@section('title', 'Store Detail')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Store Detail
        </h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-gray-200 dark:border-dark-5 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/source/dist/images/profile-8.jpg">
                    <div class="absolute mb-1 mr-1 flex items-center justify-center bottom-0 right-0 bg-theme-1 rounded-full p-2"> <i class="w-4 h-4 text-white" data-feather="camera"></i> </div>
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">WEEHYPE</div>
                    <div class="text-gray-600">
                        <i data-feather="map-pin" class="w-4 h-4 mr-2"></i> Kab. Sleman
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 dark:text-gray-300 px-5 border-l border-r border-gray-200 dark:border-dark-5 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center"> <i data-feather="user-check" class="w-4 h-4 mr-2"></i> keanureeves </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="mail" class="w-4 h-4 mr-2"></i> keanureeves@left4code.com </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3"> <i data-feather="phone" class="w-4 h-4 mr-2"></i> +62854334598454 </div>
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
    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Top Products
                        </h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="plus" class="w-4 h-4 mr-2"></i> Add Category </a>
                                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Wordpress Template</a> 
                                <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">6.5k</div>
                                    <div class="bg-theme-18 text-theme-9 rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Bootstrap HTML Template</a> 
                                <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">2.5k</div>
                                    <div class="bg-theme-17 text-theme-11 rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Tailwind HTML Template</a> 
                                <div class="text-gray-600 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">3.4k</div>
                                    <div class="bg-theme-14 text-theme-10 rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Categories -->
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            Daily Sales
                        </h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel </a>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/source/dist/images/profile-8.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">Keanu Reeves</a> 
                                <div class="text-gray-600 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-gray-700 dark:text-gray-600">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/source/dist/images/profile-11.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">Tom Cruise</a> 
                                <div class="text-gray-600 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-gray-700 dark:text-gray-600">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="Rubick Tailwind HTML Admin Template" class="rounded-full" src="/source/dist/images/profile-11.jpg">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">Kevin Spacey</a> 
                                <div class="text-gray-600 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-gray-700 dark:text-gray-600">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: General Statistic -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            General Statistics
                        </h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-300"></i> </a>
                            <div class="dropdown-menu w-40">
                                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                    <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML </a>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML </button>
                    </div>
                    <div class="grid grid-cols-1 xxl:grid-cols-7 gap-6 p-5">
                        <div class="xxl:col-span-2">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2 sm:col-span-1 xxl:col-span-2 box dark:bg-dark-5 p-5">
                                    <div class="font-medium">Net Worth</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-theme-9">+23%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 xxl:col-span-2 box dark:bg-dark-5 p-5">
                                    <div class="font-medium">Sales</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-theme-6">-5%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 xxl:col-span-2 box dark:bg-dark-5 p-5">
                                    <div class="font-medium">Profit</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-theme-6">-10%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 xxl:col-span-2 box dark:bg-dark-5 p-5">
                                    <div class="font-medium">Products</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex"> USP: <span class="ml-3 font-medium text-theme-9">+55%</span> </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-5 w-full">
                            <div class="flex justify-center mt-8">
                                <div class="flex items-center mr-5">
                                    <div class="w-2 h-2 bg-theme-1 rounded-full mr-3"></div>
                                    <span>Product Profit</span> 
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-gray-400 rounded-full mr-3"></div>
                                    <span>Author Sales</span> 
                                </div>
                            </div>
                            <div class="report-chart mt-8">
                                <canvas id="stacked-bar-chart-1" height="130"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Statistic -->
            </div>
        </div>
    </div>

@endsection