@php
    $isEdit = isset($products);
    
    $title = $isEdit ? 'Edit Data Product' : 'Tambah Data Product';

    $route = $isEdit ? route('products.update', $products->id) : route('products.store');

    $button = $isEdit ? 'Update' : 'Create';
@endphp
@extends('layouts.dash')

@section('title', 'Product Create')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            {{ $title }}
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <!-- BEGIN: Form Layout -->
            <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if ($isEdit)
                    @method("PUT")
                @else
                    @method("POST")
                @endif
                <div class="intro-y box p-5">
                    <div>
                        <label for="crud-form-1" class="form-label">Product Name</label>
                        <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input text" value="{{ $isEdit ? $products->name :  old('name') }}">
                    </div>
                    {{-- <div class="mt-3">
                        <label>Upload Images</label>
                        <form action="/file-upload" class="dropzone mt-2">
                            <div class="fallback"> <input name="file" type="file" multiple /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </form>
                    </div> --}}
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Category</label>
                        <select name="category_id" data-placeholder="Select your favorite actors" class="tom-select w-full">
                            @if ($isEdit)
                                @foreach ($subcategory as $category)
                                    <option value="{{ $category->id }}" {{ $products->category_id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
                                @endforeach
                            @else
                                @foreach ($subcategory as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select> 
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-2" class="form-label">Condition</label>
                        <select name="condition" data-placeholder="Find" class="tom-select w-full" id="crud-form-2">
                            @if ($isEdit)
                                <option value="Baru" {{ "$products->condition "== 'Baru' ? 'selected' : ''  }}>Baru</option>
                                <option value="Bekas" {{ $products->condition == 'Bekas' ? 'selected' : ''  }}>Bekas</option>
                            @else
                                <option value="1" selected>Baru</option>
                                <option value="2">Bekas</option>
                            @endif
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-3" class="form-label">Stock</label>
                        <div class="input-group">
                            <input name="quantity" id="crud-form-3" type="text" class="form-control" placeholder="Quantity" aria-describedby="input-group-1" value="{{ $isEdit ? $products->quantity :  old('quantity') }}">
                            <div id="input-group-1" class="input-group-text">pcs</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-4" class="form-label">Weight</label>
                        <div class="input-group">
                            <input name="weight" id="crud-form-4" type="text" class="form-control" placeholder="Weight" aria-describedby="input-group-2" value="{{ $isEdit ? $products->weight :  old('weight') }}">
                            <div id="input-group-2" class="input-group-text">grams</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label class="form-label">Price</label>
                        <div class="sm:grid grid-cols-1 gap-2">
                            <div class="input-group">
                                <div id="input-group-3" class="input-group-text">Unit</div>
                                <input name="price" type="text" class="form-control" placeholder="Unit" aria-describedby="input-group-3" value="{{ $isEdit ? $products->price :  old('price') }}">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label>Description</label>
                        <div class="mt-2">
                            <textarea name="description"  data-simple-toolbar="false" class="editor">
                                <p>{{ $isEdit ? $products->description :  old('description') }}</p>
                            </textarea>
                        </div>
                    </div>
                    {{-- multi user --}}
                    {{-- <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Pemilik Product</label>
                        <select name="category_id" data-placeholder="Select your favorite actors" class="tom-select w-full">
                            @if ($isEdit)
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $products->user_id == $user->id ? 'selected' : ''  }}>{{ $user->name }}</option>
                                @endforeach
                            @else
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            @endif
                        </select> 
                    </div> --}}
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Pemilik Product</label>
                        <select name="user_id" data-placeholder="Select your favorite actors" class="tom-select w-full">
                            @if ($isEdit)
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $stores->user_id == $user->id ? 'selected' : ''  }}>{{ $user->name }}</option>
                                @endforeach
                            @else
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            @endif
                        </select> 
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <label for="status" class="form-control-label">Status</label>
                            <br>
                            @if ($isEdit)
                            <label>
                                <input 
                                type="radio" 
                                name="status" 
                                value="1" {{ $products->status == 1 ? 'checked' : '' }}
                                {{-- class="@error('status') is-invalid @enderror" --}}
                                /> 
                                Active
                            </label>
                            &nbsp;
                            <label>
                                <input 
                                type="radio" 
                                name="status" 
                                value="0" {{ $products->status == 0 ? 'checked' : '' }}
                                /> 
                                Inactive
                            </label>
                            @else
                            <label>
                                <input 
                                type="radio" 
                                name="status" 
                                value="1" checked
                                /> 
                                Active
                            </label>
                            &nbsp;
                            <label>
                                <input 
                                type="radio" 
                                name="status" 
                                value="0"
                                /> 
                                Inactive
                            </label>
                            @endif
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24">{{ $button }}</button>
                    </div>
                </div>
            </form>
            <!-- END: Form Layout -->
        </div>
    </div>
</div>
<!-- END: Content -->
@endsection