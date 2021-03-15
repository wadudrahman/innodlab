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
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-4">Add New Package</h5>
                            <form>
                                <div class="form-group row">
                                    <label for="title" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="title" placeholder="title">
                                    </div>
                                        <label for="status" class="col-sm-1 col-form-label">Status</label>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="">Active</option>
                                                    <option value="">Client</option>
                                                    <option value="">Designer</option>
                                                    <option value="">Affiliate</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                                            <label class="form-check-label" for="gridCheck1">Is Trail Available</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tDaysCount" class="col-sm-2 col-form-label">Trail Days Count</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tDaysCount" placeholder="">
                                    </div>
                                    <label for="tDesignCount" class="col-sm-2 col-form-label">Trail Design Count</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="tDesignCount" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="designCount" class="col-sm-2 col-form-label">Design Count</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="designCount"
                                               placeholder="">
                                    </div>

                                    <label for="fileStorage" class="col-sm-2 col-form-label">File Storage for</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" id="fileStorage" placeholder="">
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">Is Multiple Revisions Available</label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-sm-2">Is Trail Available</div>--}}
                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">Is Same Day Delivery Available</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-2"></div>
                                        {{-- <div class="col-sm-2">Is Trail Available</div>--}}
                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">Receive Design Via Email</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">Is Open for Registration</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-sm-10">
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

