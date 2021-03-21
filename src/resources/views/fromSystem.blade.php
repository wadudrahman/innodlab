@extends('layouts.app')

@section('title', 'From System')

@section('parent', 'Job')

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

                {{--<div class="col-sm-4 offset-4">
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
                </div>--}}


                <div class="col-12">
                    <div class="card">
                        <div class="card-body"><h5 class="card-title">Job Board</h5>
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Job ID</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                                </tbody>
                            </table>
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

