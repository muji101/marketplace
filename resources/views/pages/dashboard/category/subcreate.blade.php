@php
    $isEdit = isset($subcategory);
    
    $title = $isEdit ? 'Edit Sub Category' : 'Tambah Sub Category';

    $route = $isEdit ? route('subcategory.update', $subcategory->id) : route('subcategory.store');

    $button = $isEdit ? 'Update' : 'Create';
@endphp
@extends('layouts.dash')

@section('title', 'Category Create')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $title }} <span class="font-bold">{{ $categories->name }}</span>
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($isEdit)
                        @method('PUT')
                    @else
                        @method("POST")
                    @endif
                    <input type="hidden" name="category_id" value="{{ $categories->id }}">
                    <div>
                        <label for="crud-form-1" class="form-label">Sub Category Name</label>
                        <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text" value="{{ $isEdit ? $subcategory->name :  old('name') }}">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Sub Category Photo</label>
                        <input name="photo" id="crud-form-1" type="file" class="form-control w-full" >
                    </div>
                    {{-- <div class="mt-3">
                        <label>Upload Images</label>
                        <form action="/file-upload" class="dropzone mt-2">
                            <div class="fallback"> <input name="photo" type="file" multiple /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </form>
                    </div> --}}
                    {{-- <div class="mt-3">
                        <label>Active Status</label>
                        <div class="mt-2">
                            <input type="checkbox" class="form-check-switch">
                        </div>
                    </div> --}}
                    {{-- <div class="mt-3">
                        <label>Description</label>
                        <div class="mt-2">
                            <div data-simple-toolbar="true" class="editor">
                                <p>Content of the editor.</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">{{ $button }}</button>
                    </div>
                </form>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection