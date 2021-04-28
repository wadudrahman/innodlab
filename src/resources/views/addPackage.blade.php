@extends('layouts.app')

@section('title', 'Add Package')

@section('parent', 'Package')

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
                    @include('partials.alerts')
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Add New Package</h5>
                            <form method="post" action="{{ url('/addPackage') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Starter">
                                        @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="designCount" class="col-sm-2 col-form-label">Design Count</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="designCount" name="designCount"
                                               placeholder="30">
                                        @error('designCount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pricePerDesign" class="col-sm-2 col-form-label">Price Per Design</label>
                                    <div class="col-sm-4">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" id="pricePerDesign"
                                                   name="pricePerDesign" placeholder="15">
                                            <div class="input-group-append">
                                                <span class="input-group-text">BDT</span>
                                            </div>
                                        </div>
                                        @error('pricePerDesign')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="iconClass" class="col-sm-2 col-form-label">Icon Class</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="iconClass" name="iconClass"
                                               placeholder="Icon">
                                        @error('iconClass')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="isTrailAvailable"
                                                   name="isTrailAvailable">
                                            <label class="form-check-label" for="isTrailAvailable" value="1">Is Trail
                                                Available</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="trailDaysCount" class="col-sm-2 col-form-label">Trail Days Count</label>
                                    <div class="col-sm-4">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" id="trailDaysCount"
                                                   name="trailDaysCount" placeholder="15">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Days</span>
                                            </div>
                                        </div>
                                        @error('trailDaysCount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <label for="trailDesignCount" class="col-sm-2 col-form-label">Trail Design
                                        Count</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="trailDesignCount"
                                               name="trailDesignCount" placeholder="10">
                                        @error('trailDesignCount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id="status" name="status">
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <label for="fileStoragePeriod" class="col-sm-2 col-form-label">File Storage
                                        For</label>
                                    <div class="col-sm-4">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" id="fileStoragePeriod"
                                                   name="fileStoragePeriod" placeholder="15">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Days</span>
                                            </div>
                                        </div>
                                        @error('fileStoragePeriod')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="multipleRevision"
                                                   name="multipleRevision">
                                            <label class="form-check-label" for="multipleRevision">Is Multiple Revisions
                                                Available</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="receiveAtEmail"
                                                   name="receiveAtEmail">
                                            <label class="form-check-label" for="receiveAtEmail">Receive/ Deliver Design Via
                                                Email</label>
                                        </div>
                                    </div>
                                    <label for="addonEmailCount" class="col-sm-2 col-form-label">Addon Email
                                        Count</label>
                                    <div class="col-sm-4">
                                        <input type="number" class="form-control" id="addonEmailCount"
                                               name="addonEmailCount" placeholder="10">
                                        @error('addonEmailCount')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="sameDayDelivery"
                                                   name="sameDayDelivery">
                                            <label class="form-check-label" for="sameDayDelivery">Is Same Day Delivery
                                                Available</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="openRegistration"
                                                   name="openRegistration">
                                            <label class="form-check-label" for="openRegistration">Is Open for
                                                Registration</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mb-0">Add Package</button>
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

