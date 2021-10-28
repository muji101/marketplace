@extends('layouts.dash')

@section('title', 'Gallery Create')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Gallery Create
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <form action="{{ route('galleries.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="crud-form-1" class="form-label">Product Name</label>
                        <select name="product_id" class="tom-select w-full">
                            @foreach ($products as $product)
                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <label>Foto Product</label>
                            <input type="file" name="photo" class="form-control" required>
                        </div>
                        <input type="hidden" name="is_default" value="1">
                        {{-- <label>Upload Images</label>
                        <form action="/file-upload" class="dropzone mt-2">
                            <div class="fallback"> <input name="file" type="file" multiple /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </form> --}}
                    </div>
                    {{-- <div class="mt-3">
                        <label>Make Default</label>
                        <div class="mt-2">
                            <input type="checkbox" class="form-check-switch">
                        </div>
                    </div> --}}
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">Save</button>
                    </div>
                </form>
            </div>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection