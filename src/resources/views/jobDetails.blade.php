@extends('layouts.app')

@section('title', 'Job List')

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
                    <div class="card">
                        <div class="position-relative">
                            <img class="card-img-top" src="img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h6>Title</h6>
                            <p class="list-item mb-4">
                                Budget: BDT 300 <br>
                                Timeline: 60 mins.
                            </p>
                            <footer>
                                <a class="btn btn-sm btn-circle btn-info" href="{{ url('/jobDetails/1') }}">Details</a>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="position-relative">
                            <img class="card-img-top" src="img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-4">Homemade Cheesecake with Fresh Berries and Mint</p>
                            <footer>
                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="position-relative">
                            <img class="card-img-top" src="img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-4">Homemade Cheesecake with Fresh Berries and Mint</p>
                            <footer>
                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="position-relative">
                            <img class="card-img-top" src="img/cards/thumb-1.jpg" alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <p class="list-item-heading mb-4">Homemade Cheesecake with Fresh Berries and Mint</p>
                            <footer>
                                <p class="text-muted text-small mb-0 font-weight-light">09.04.2018</p>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

