@extends('layouts.dash')

@section('title', 'User Create')

@section('content')

@include('includes.back.topbar')

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            User Create
        </h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y box p-5">
                <form action="{{ route('user.store') }}"  method="POST" enctype="multipart/form-data">
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
                        <label>photo</label>
                        <input type="file" name="photo">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Name</label>
                        <input name="name" id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Name">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Email</label>
                        <input  name="email" id="crud-form-1" type="email" class="form-control w-full" placeholder="Input Email">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Password</label>
                        <input name="password" id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password">
                    </div>
                    {{-- <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Confirmation Password</label>
                        <input name="password_confirmation" id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password">
                    </div> --}}
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Phone</label>
                        <input name="phone" id="crud-form-1" type="text" class="form-control w-full" placeholder="+62">
                    </div>
                    <div class="mt-3">
                        <label for="crud-form-1" class="form-label">Gender</label>
                        <select name="gender" data-placeholder="Select your favorite actors" class="tom-select w-full">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select> 
                    </div>
                    <div   id="locations" class="mt-3">
                        <label class="form-label">Address</label>
                        <div class="sm:grid grid-cols-3 gap-2">
                            <div class="input-group">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">Province</div> 
                                    <select name="province_id" class="tom-select w-full">
                                        @foreach ($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">Regency</div> 
                                    <select name="regency_id" class="tom-select w-full">
                                        @foreach ($regencies as $regency)
                                            <option value="{{ $regency->id }}">{{ $regency->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">District</div> 
                                    <select name="district_id" class="tom-select w-full">
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div class="flex w-full">
                                    <div class="z-30 rounded-l w-24 px-2 flex items-center justify-center bg-gray-100 border text-gray-600 dark:bg-dark-1 dark:border-dark-4 -mr-1">Village</div> 
                                    <select name="village_id" class="tom-select w-full">
                                        @foreach ($villages as $village)
                                            <option value="{{ $village->id }}">{{ $village->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text w-24">Zipcode</div>
                                <input name="zip_code" type="number" class="form-control" placeholder="Zip Code" aria-describedby="input-group-5">
                            </div>
                            <div class="input-group mt-2 sm:mt-0">
                                <div id="input-group-5" class="input-group-text w-24">Country</div>
                                <input name="country" type="text" class="form-control" placeholder="Country" aria-describedby="input-group-5">
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="crud-form-1" class="form-label">Role</label>
                            <select name="role" data-placeholder="Select your favorite actors" class="tom-select w-full">
                                <option value="superadmin">SuperAdmin</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select> 
                        </div>
                    </div>
                    <div class="text-right mt-5">
                        <a href="{{  route('user.index')  }}" type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
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
