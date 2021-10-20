@extends('layouts.dash')

@section('title', 'Promotion Create')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Promotion Create
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Promotion Name</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text">
                </div>
                <div class="mt-3">
                    <label>Upload Images</label>
                    <form action="/file-upload" class="dropzone mt-2">
                        <div class="fallback"> <input name="file" type="file" multiple /> </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                            <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                        </div>
                    </form>
                </div>
                <div class="mt-3">
                    <label for="crud-form-2" class="form-label">Category</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2">
                        <option value="1" selected>Sport & Outdoor</option>
                        <option value="2">PC & Laptop</option>
                        <option value="3" selected>Smartphone & Tablet</option>
                        <option value="4">Photography</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label for="crud-form-2" class="form-label">Type</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full" id="crud-form-2">
                        <option value="1" selected>Slider</option>
                        <option value="2">Special Brand</option>
                        <option value="3" selected>Topads Banner</option>
                        <option value="4">Official Ads</option>
                    </select>
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="mt-2">
                        <input type="checkbox" class="form-check-switch">
                    </div>
                </div>
                <div class="text-right mt-5">
                    <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection