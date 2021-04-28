@extends('layouts.app')

@section('title', 'Package Management')

@section('parent', 'User')

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

                <div class="col-12">
                    @include('partials.alerts')
                    <div class="row equal-height-container">
                        @foreach($packages as $package)
                            <div class="col-md-12 col-lg-4 mb-4 col-item">
                                <div class="card">
                                    <div
                                        class="card-body pt-5 pb-5 d-flex flex-lg-column flex-md-row flex-sm-row flex-column">
                                        <div class="price-top-part">
                                            <i class="iconsminds-male large-icon"></i>
                                            <h5 class="mb-0 font-weight-semibold color-theme-1 mb-4">{!! $package->title !!}</h5>
                                            <p class="text-large mb-2 text-default">
                                                ৳ {!! $package->price_per_design * $package->design_count !!}
                                            </p>
                                            <p class="text-muted text-small">
                                                BDT {!! $package->price_per_design !!}
                                                /Design
                                            </p>
                                        </div>
                                        <div
                                            class="pl-3 pr-3 pt-3 pb-0 d-flex price-feature-list flex-column flex-grow-1">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="mb-0">
                                                        Up to <b>{!! $package->design_count !!}</b> Design
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="mb-0">
                                                        {!! $package->file_stored_day_count !!} Day Free File Storage
                                                    </p>
                                                </li>
                                                @if($package->is_multiple_revisions)
                                                    <li><p class="mb-0">Multiple Revisions</p></li>
                                                @endif
                                                @if($package->is_same_day_delivery)
                                                    <li><p class="mb-0">Same Day Delivery</p></li>
                                                @endif
                                                @if($package->is_via_email_allowed)
                                                    <li>
                                                        <p class="mb-0">
                                                            Send / Receive Design Via Email. Tag up
                                                            to {!! $package->addon_email_count !!} Emails
                                                        </p>
                                                    </li>
                                                @endif
                                            </ul>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-link btn-empty btn-lg">PURCHASE
                                                    <i class="simple-icon-arrow-right"></i>
                                                </a>
                                                <a href="#" class="btn btn-link btn-empty btn-lg">EDIT
                                                    <i class="simple-icon-arrow-right"></i>
                                                </a>
                                                <a href="{{ url('/deletePackage/' . $package->id) }}"
                                                   class="btn btn-link btn-empty btn-lg">DELETE
                                                    <i class="simple-icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <div class="col-md-12 col-lg-4 mb-4 col-item">
                            <div class="card">
                                <div
                                    class="card-body pt-5 pb-5 d-flex flex-lg-column flex-md-row flex-sm-row flex-column">
                                    <div class="price-top-part">
                                        <i class="iconsminds-male-female large-icon"></i>
                                        <h5 class="mb-0 font-weight-semibold color-theme-1 mb-4">TEAM</h5>
                                        <p class="text-large mb-2 text-default">$17</p>
                                        <p class="text-muted text-small">User/Month Up to 10 Users</p>
                                    </div>
                                    <div class="pl-3 pr-3 pt-3 pb-0 d-flex price-feature-list flex-column flex-grow-1">
                                        <ul class="list-unstyled">
                                            <li><p class="mb-0">24/5 support</p></li>
                                            <li><p class="mb-0">Number of end products 1</p></li>
                                            <li><p class="mb-0">Two factor authentication</p></li>
                                            <li><p class="mb-0">Free updates</p></li>
                                            <li><p class="mb-0">Forum support</p></li>
                                        </ul>
                                        <div class="text-center"><a href="#" class="btn btn-link btn-empty btn-lg">PURCHASE
                                                <i class="simple-icon-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4 mb-4 col-item">
                            <div class="card">
                                <div
                                    class="card-body pt-5 pb-5 d-flex flex-lg-column flex-md-row flex-sm-row flex-column">
                                    <div class="price-top-part"><i class="iconsminds-mens large-icon"></i><h5
                                            class="mb-0 font-weight-semibold color-theme-1 mb-4">ENTERPRISE</h5>
                                        <p class="text-large mb-2 text-default">$19</p>
                                        <p class="text-muted text-small">User/Month 10+ Users</p></div>
                                    <div
                                        class="pl-3 pr-3 pt-3 pb-0 flex-grow-1 d-flex price-feature-list flex-column flex-grow-1">
                                        <ul class="list-unstyled">
                                            <li><p class="mb-0">24/7 support</p></li>
                                            <li><p class="mb-0">Number of end products 1</p></li>
                                            <li><p class="mb-0">Two factor authentication</p></li>
                                            <li><p class="mb-0">Free updates</p></li>
                                            <li><p class="mb-0">Forum support</p></li>
                                        </ul>
                                        <div class="text-center"><a href="#" class="btn btn-link btn-empty btn-lg">PURCHASE
                                                <i class="simple-icon-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
@push('scripts')

@endpush

