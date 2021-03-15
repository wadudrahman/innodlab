@extends('layouts.app')

@section('title', 'Add User')

@section('parent', 'User')

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('css/vendor/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/quill.bubble.css') }}">
@endpush

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>@yield('title')</h1>
                    <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                        <ol class="breadcrumb pt-0">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0)">@yield('parent')</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                    <div class="separator mb-5"></div>
                </div>
                <div class="col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Add New User</h5>
                            <form>
                                <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <select class="form-control" id="role" name="role">
                                                <option value="">Moderator</option>
                                                <option value="">Client</option>
                                                <option value="">Designer</option>
                                                <option value="">Affiliate</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-4">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <label for="msisdn" class="col-sm-1 col-form-label">MSISDN</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="msisdn" placeholder="MSISDN">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-4">
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <label for="package" class="col-sm-1 col-form-label">Package</label>
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <select class="form-control" id="package" name="package">
                                                <option value="">package 1</option>
                                                <option value="">package 2</option>
                                                <option value="">package 3</option>
                                                <option value="">package 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nid" class="col-sm-2 col-form-label">NID/Smart Card No</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="nid" placeholder="NID">
                                    </div>
                                    <label for="expertiseLevel" class="col-sm-2 col-form-label">Expertise Level</label>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <select class="form-control" id="expertiseLevel" name="expertiseLevel">
                                                <option value="">Professional</option>
                                                <option value="">Semi-pro</option>
                                                <option value="">Intermediate</option>
                                                <option value="">Beginner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <label for="referenceNumber" class="col-sm-2 col-form-label">Reference Number</label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" id="referenceNumber" placeholder="Reference Number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="companyName" class="col-sm-2 col-form-label">Company Name</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="companyName" placeholder="Company Name">
                                    </div>
                                    <label for="designation" class="col-sm-2 col-form-label">Designation</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="designation" placeholder="Designation">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary mb-0">Add User</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@push('scripts')
    <script src="{{ asset('js/vendor/quill.min.js') }}" style="opacity: 1;"></script>
@endpush

