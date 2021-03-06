@extends('layouts.dash')

@section('title', 'Transaction List')

@section('content')

@include('includes.back.topbar')
<h2 class="intro-y text-lg font-medium mt-10">
    Transaction List
</h2>
<div class="grid grid-cols-12 gap-6 mt-5">
    {{-- <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
        <button class="btn btn-primary shadow-md mr-2">Add New Transaction</button>
        <div class="dropdown">
            <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300" aria-expanded="false">
                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-feather="plus"></i> </span>
            </button>
            <div class="dropdown-menu w-40">
                <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                    <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                </div>
            </div>
        </div>
        <div class="hidden md:block mx-auto text-gray-600">Showing 1 to 10 of 150 entries</div>
        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
            <div class="w-56 relative text-gray-700 dark:text-gray-300">
                <input type="text" class="form-control w-56 box pr-10 placeholder-theme-13" placeholder="Search...">
                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i> 
            </div>
        </div>
    </div> --}}
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">TRANSACTION CODE</th>
                    <th class="whitespace-nowrap">NAME</th>
                    {{-- <th class="text-center whitespace-nowrap">EMAIL</th> --}}
                    <th class="text-center whitespace-nowrap">DATE</th>
                    <th class="text-center whitespace-nowrap">METODE PAYMENT</th>
                    <th class="text-center whitespace-nowrap">TOTAL TRANSACTION</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="intro-x">
                    <td class="w-40">
                        #TMT-389
                        </div>
                    </td>
                    <td>
                        <a href="" class="font-medium whitespace-nowrap">Samsung Q90 QLED TV</a> 
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                    </td>
                    {{-- <td class="text-center">transaction@gmail.com</td> --}}
                    <td class="text-center">20-10-2021</td>
                    <td class="text-center">Transfer Bank</td>
                    <td class="text-center font-bold">Rp.1011000</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-12"> <i data-feather="square" class="w-4 h-4 mr-2"></i> Pending </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3 text-theme-9" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-6" href="javascript:;"> <i data-feather="x-square" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-16" href="javascript:;"> <i data-feather="truck" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-1" href="javascript:;"> <i data-feather="edit" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-12" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="eye" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i></a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        #TMT-389
                        </div>
                    </td>
                    <td>
                        <a href="" class="font-medium whitespace-nowrap">Dell XPS 13</a> 
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">PC &amp; Laptop</div>
                    </td>
                    {{-- <td class="text-center">transaction@gmail.com</td> --}}
                    <td class="text-center">20-10-2021</td>
                    <td class="text-center">Transfer Bank</td>
                    <td class="text-center font-bold">Rp.1011000</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Success </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3 text-theme-9" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-6" href="javascript:;"> <i data-feather="x-square" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-16" href="javascript:;"> <i data-feather="truck" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-1" href="javascript:;"> <i data-feather="edit" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-12" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="eye" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i></a>
                        </div>
                    </td>
                </tr>
                <tr class="intro-x">
                    <td class="w-40">
                        #TMT-389
                    </td>
                    <td>
                        <a href="" class="font-medium whitespace-nowrap">Nikon Z6</a> 
                        <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">Photography</div>
                    </td>
                    {{-- <td class="text-center">transaction@gmail.com</td> --}}
                    <td class="text-center">20-10-2021</td>
                    <td class="text-center">Transfer Bank</td>
                    <td class="text-center font-bold">Rp.1011000</td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-theme-6"> <i data-feather="x-square" class="w-4 h-4 mr-2"></i> Failed </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a class="flex items-center mr-3 text-theme-9" href="javascript:;"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-6" href="javascript:;"> <i data-feather="x-square" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-16" href="javascript:;"> <i data-feather="truck" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-1" href="javascript:;"> <i data-feather="edit" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center mr-3 text-theme-12" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="eye" class="w-4 h-4 mr-1"></i></a>
                            <a class="flex items-center text-theme-6" href="javascript:;" data-toggle="modal" data-target="#delete-confirmation-modal"> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    <!-- BEGIN: Pagination -->
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
        <ul class="pagination">
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-left"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-left"></i> </a>
            </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li> <a class="pagination__link" href="">1</a> </li>
            <li> <a class="pagination__link pagination__link--active" href="">2</a> </li>
            <li> <a class="pagination__link" href="">3</a> </li>
            <li> <a class="pagination__link" href="">...</a> </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevron-right"></i> </a>
            </li>
            <li>
                <a class="pagination__link" href=""> <i class="w-4 h-4" data-feather="chevrons-right"></i> </a>
            </li>
        </ul>
        <select class="w-20 form-select box mt-3 sm:mt-0">
            <option>10</option>
            <option>25</option>
            <option>35</option>
            <option>50</option>
        </select>
    </div>
    <!-- END: Pagination -->
</div>
<!-- BEGIN: Delete Confirmation Modal -->
<div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="p-5 text-center">
                    <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i> 
                    <div class="text-3xl mt-5">Are you sure?</div>
                    <div class="text-gray-600 mt-2">
                        Do you really want to delete these records? 
                        <br>
                        This process cannot be undone.
                    </div>
                </div>
                <div class="px-5 pb-8 text-center">
                    <button type="button" data-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-danger w-24">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Delete Confirmation Modal -->

@endsection


