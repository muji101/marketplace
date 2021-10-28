@php
    $isEdit = isset($stores);
    
    $title = $isEdit ? 'Edit Data Store' : 'Tambah Data Store';

    $route = $isEdit ? route('stores.update', $stores->id) : route('stores.store');

    $button = $isEdit ? 'Update' : 'Create';
@endphp
@extends('layouts.dash')

@section('title', 'Store Create')

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
            <div class="intro-y box p-5">
                <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @if ($isEdit)
                        @method("PUT")
                    @else
                        @method("POST")
                    @endif
                    <div>
                        <div class="form-group">
                            <label>Photo Store</label>
                            <input name="photo" type="file" class="form-control" required>
                        </div>
                        {{-- <label>Photo Store</label>
                        <form action="/file-upload" class="dropzone mt-2">
                            <div class="fallback"> <input name="file" type="file" multiple /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </form> --}}
                    </div>
                    <div class="mt-3">
                        <div class="form-group">
                            <label>Cover Store</label>
                            <input name="cover" type="file" class="form-control" required>
                        </div>
                        {{-- <label>Photo Cover</label>
                        <form action="/file-upload" class="dropzone mt-2">
                            <div class="fallback"> <input name="file" type="file" multiple /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </form> --}}
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Store Name</label>
                        <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Name" value="{{ $isEdit ? $stores->name :  old('name') }}">
                    </div>
                    <div class="mt-3"> 
                        <label for="crud-form-2" class="form-label">Type</label>
                        <select name="type" data-placeholder="Select your favorite actors" class="tom-select w-full">
                            
                            @if ($isEdit)
                            <option value="1" {{ $stores->type == '1' ? 'selected' : '' }}>Power Merchant</option>
                            <option value="2" {{ $stores->type == '2' ? 'selected' : '' }}>Power Merchant Pro</option>
                            <option value="3" {{ $stores->type == '3' ? 'selected' : '' }}>Official Store</option>
                            @else
                            <option selected disabled>-- Type --</option>
                            <option value="1">Power Merchant</option>
                            <option value="2">Power Merchant Pro</option>
                            <option value="3">Official Store</option>
                            @endif
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Slogan</label>
                        <input name="slogan" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Slogan" value="{{ $isEdit ? $stores->slogan :  old('slogan') }}">
                    </div>
                    <div class="mt-3">
                        <label>Description</label>
                        <div class="mt-2">
                            <textarea name="description" data-simple-toolbar="false" class="editor">
                                <p>{!! $isEdit ? $stores->description :  old('description') !!}</p>
                            </textarea>
                        </div>
                    <div class="mt-3">
                        <label class="form-label">Address</label>
                        <input name="address" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Address" value="{{ $isEdit ? $stores->address :  old('address') }}">
                        {{-- <div class="sm:grid grid-cols-3 gap-2">
                            <div class="input-group">
                                <div id="input-group-3" class="input-group-text">Province</div>
                                <input type="text" class="form-control" placeholder="Province" aria-describedby="input-group-3">
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-4" class="input-group-text">Regency</div>
                                <input type="text" class="form-control" placeholder="Regency" aria-describedby="input-group-4">
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text">District</div>
                                <input type="text" class="form-control" placeholder="District" aria-describedby="input-group-5">
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text">Village</div>
                                <input type="text" class="form-control" placeholder="Village" aria-describedby="input-group-5">
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text">Zipcode</div>
                                <input type="text" class="form-control" placeholder="Zip Code" aria-describedby="input-group-5">
                            </div>
                        </div> --}}
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Pemilik Toko</label>
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
                                value="1" {{ $stores->status == 1 ? 'checked' : '' }}
                                {{-- class="@error('status') is-invalid @enderror" --}}
                                /> 
                                Active
                            </label>
                            &nbsp;
                            <label>
                                <input 
                                type="radio" 
                                name="status" 
                                value="0" {{ $stores->status == 0 ? 'checked' : '' }}
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
                    
                    </div>
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