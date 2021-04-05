@extends('layouts.app')

@section('title', 'Job List')

@section('parent', 'Job')

@push('after_styles')
    <style>
        .table th, .table td {
            padding: 0;
            vertical-align: top;
        }
    </style>
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
                <div class="col-sm-6 offset-3">
                    <div class="input-group">
                        <input type="text" class="form-control"
                               name="query" id="query"
                               placeholder="Start typing something to search..."
                               data-provide="typeahead" autocomplete="off">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary default"><i class="simple-icon-magnifier"></i>
                            </button>
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card mb-4">
                        <div class="position-relative">
                            <img class="card-img-top" src="img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h6>T-Shirt Mockup </h6>
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <td>Budget</td>
                                    <td>BDT 300</td>
                                </tr>
                                <tr>
                                    <td>Timeline</td>
                                    <td>1 Day 5 Hours 36 Minutes</td>
                                </tr>
                                <tr>
                                    <td>Job Token</td>
                                    <td>AED159687</td>
                                </tr>
                                </tbody>
                            </table>
                            <footer class="text-center">
                                <a class="btn btn-sm btn-circle btn-info" href="{{ url('/jobDetails') }}">Details</a>
                                <a class="btn btn-sm btn-circle btn-primary" href="{{ url('/jobDetails') }}">Apply Now !</a>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </main>
@endsection

