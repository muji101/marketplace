@extends('layouts.dash')

@section('title', 'Category Detail')

@section('content')

@include('includes.back.topbar')
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Detail Category <span class="font-bold">{{ $categories->name }}</span>
    </h2>
    <a href="{{ route('subcategory-create', $categories->id) }}" class="btn btn-primary shadow-md mr-2">Add Sub Category</a>
</div>
<div class="px-5 ">
    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">Sub Name</th>
                    {{-- <th class="border-b-2 dark:border-dark-5 text-right whitespace-nowrap">Photo</th> --}}
                    <th class="border-b-2 dark:border-dark-5 text-right whitespace-nowrap">Product</th>
                    <th class="border-b-2 dark:border-dark-5 text-right whitespace-nowrap">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subcategory as $sub)
                <tr>
                    <td class="border-b dark:border-dark-5">
                        <div class="font-medium whitespace-nowrap">{{ $sub->name }}</div>
                        <div class="text-gray-600 text-sm mt-0.5 whitespace-nowrap">{{ $categories->name }}</div>
                    </td>
                    {{-- <td class="text-right border-b dark:border-dark-5 w-32">$25</td> --}}
                    <td class="text-right border-b dark:border-dark-5 w-32">2</td>
                    <td class="text-right border-b dark:border-dark-5 w-48">
                        <div class="flex justify-center items-center">
                            {{-- <a class="flex items-center mr-3 text-theme-12" href="{{ route('categories.show', $category->id) }}"> <i data-feather="eye" class="w-4 h-4 mr-1"></i> Show </a> --}}
                            <a class="flex items-center mr-3" href="{{ route('subcategory-edit', [$categories->id, $sub->id]) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            <form action="{{ route('subcategory.destroy', $sub->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-theme-6" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete Data">
                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i>Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
