@php
    $isEdit = isset($users);
    
    $title = $isEdit ? 'Edit Data Pengguna' : 'Tambah Data Pengguna';

    $route = $isEdit ? route('user.update', $users->id) : route('user.store');

    $button = $isEdit ? 'Update' : 'Create';
@endphp
@extends('layouts.dash')

@section('title', 'User Create')

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
                <form action="{{ $route }}"  method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')

                    <div class="">
                        {{-- <label for="crud-form-1" class="form-label">Photo Profile</label>
                        <div data-single="true" action="/file-upload" class="dropzone">
                            <div class="fallback"> <input name="photo" type="file" /> </div>
                            <div class="dz-message" data-dz-message>
                                <div class="text-lg font-medium">Drop files here or click to upload.</div>
                                <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                            </div>
                        </div> --}}
                        <div class="flex items-center">
                            @if ($isEdit)
                            <img class="w-32 rounded" src="{{ asset('/storage/'.$users->photo) }}" alt="">
                            @endif
                            <div class="ml-2">
                                <label class="font-bold">Photo</label>
                                <input type="file" name="photo">
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Name</label>
                        <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Name" value="{{ $isEdit ? $users->name :  old('name') }}">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Email</label>
                        <input  name="email" id="crud-form-1" type="email" class="form-control w-full" placeholder="Input Email" value="{{ $isEdit ? $users->email :  old('email') }}">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Password</label>
                        <input name="password" id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password" value="{{ $isEdit ? $users->password :  old('password') }}">
                    </div>
                    {{-- <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Confirmation Password</label>
                        <input name="password_confirmation" id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password">
                    </div> --}}
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Phone</label>
                        <input name="phone" id="crud-form-1" type="text" class="form-control w-full" placeholder="+62" value="{{ $isEdit ? $users->phone :  old('phone') }}">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Gender</label>
                        <select name="gender" data-placeholder="Select your favorite actors" class="tom-select w-full">
                            @if ($isEdit)
                            <option value="L" {{ $users->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $users->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
                            @else
                            <option selected disabled>-- Gender --</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                            @endif
                        </select> 
                    </div>
                    <div   id="locations" class="mt-3">
                        <label class="form-label">Address</label>
                        <div class="sm:grid grid-cols-3 gap-2">
                            <div class="input-group">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">Province</div> 
                                    <select name="province_id" class="tom-select w-full">
                                        @if ($isEdit)
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}" {{ $users->province_id == $province->id ? 'selected' : ''  }}>{{ $province->name }}</option>
                                            @endforeach
                                        @else
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->id }}">{{ $province->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">Regency</div> 
                                    <select name="regency_id" class="tom-select w-full">
                                        @if ($isEdit)
                                            @foreach ($regencies as $regency)
                                                <option value="{{ $regency->id }}" {{ $users->regency_id == $regency->id ? 'selected' : ''  }}>{{ $regency->name }}</option>
                                            @endforeach
                                        @else
                                            @foreach ($regencies as $regency)
                                                <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">District</div> 
                                    <select name="district_id" class="tom-select w-full">
                                        @if ($isEdit)
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->id }}" {{ $users->district_id == $district->id ? 'selected' : ''  }}>{{ $district->name }}</option>
                                            @endforeach
                                        @else
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">Village</div> 
                                    <select name="village_id" class="tom-select w-full">
                                        @if ($isEdit)
                                            @foreach ($villages as $village)
                                                <option value="{{ $village->id }}" {{ $users->village_id == $village->id ? 'selected' : ''  }}>{{ $village->name }}</option>
                                            @endforeach
                                        @else
                                            @foreach ($villages as $village)
                                                <option value="{{ $village->id }}">{{ $village->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text w-24">Zipcode</div>
                                <input name="zip_code" type="number" class="form-control" placeholder="Zip Code" aria-describedby="input-group-5" value="{{ $isEdit ? $users->zip_code :  old('zip_code') }}">
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text w-24">Country</div>
                                <input name="country" type="text" class="form-control" placeholder="Country" aria-describedby="input-group-5" value="{{ $isEdit ? $users->country :  old('country') }}">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Role</label>
                            <select name="role" data-placeholder="Select your favorite actors" class="tom-select w-full">
                                @if ($isEdit)
                                <option value="superadmin" {{ $users->role === 'superadmin' ? 'selected' : '' }}>Super Admin</option>
                                <option value="admin" {{ $users->role === 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="user" {{ $users->role === 'user' ? 'selected' : '' }}>User</option>
                                @else
                                <option selected disabled>-- Role --</option>
                                <option value="superadmin">Super Admin</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
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
                                    value="1" {{ $users->status == 1 ? 'checked' : '' }}
                                    {{-- class="@error('status') is-invalid @enderror" --}}
                                    /> 
                                    Active
                                </label>
                                &nbsp;
                                <label>
                                    <input 
                                    type="radio" 
                                    name="status" 
                                    value="0" {{ $users->status == 0 ? 'checked' : '' }}
                                    {{-- class="@error('status') is-invalid @enderror" --}}
                                    /> 
                                    Inactive
                                </label>
                                @else
                                <label>
                                    <input 
                                    type="radio" 
                                    name="status" 
                                    value="1" checked
                                    {{-- class="@error('status') is-invalid @enderror" --}}
                                    /> 
                                    Active
                                </label>
                                &nbsp;
                                <label>
                                    <input 
                                    type="radio" 
                                    name="status" 
                                    value="0"
                                    {{-- class="@error('status') is-invalid @enderror" --}}
                                    /> 
                                    Inactive
                                </label>
                                @endif
                                
                                {{-- @error('status')
                                    <div class="text-muted">{{ $message }}</div>
                                @enderror --}}
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <a href="{{  route('user.index')  }}" type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
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
