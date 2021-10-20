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
                <div class="">
                    <label for="crud-form-1" class="form-label">Photo Profile</label>
                    <form data-single="true" action="/file-upload" class="dropzone">
                        <div class="fallback"> <input name="file" type="file" /> </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                            <div class="text-gray-600"> This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded. </div>
                        </div>
                    </form>
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Name</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Name">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Email</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Input Email">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Password</label>
                    <input id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Confirmation Password</label>
                    <input id="crud-form-1" type="password" class="form-control w-full" placeholder="Input Password">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Phone</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="+62">
                </div>
                <div class="mt-3">
                    <label for="crud-form-1" class="form-label">Gender</label>
                    <select data-placeholder="Select your favorite actors" class="tom-select w-full">
                        <option value="1">Laki-laki</option>
                        <option value="2">Perempuan</option>
                    </select> 
                </div>
                <div class="mt-3">
                    <label class="form-label">Address</label>
                    <div class="sm:grid grid-cols-3 gap-2">
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