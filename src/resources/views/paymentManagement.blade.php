@extends('layouts.app')

@section('title', 'Payment Management')

@section('parent', 'Payment')

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
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Payment Method</h5>

                            <form method="post" action="{{ url('') }}">
                                <div class="form-group">
                                    <label for="categoryName">Title</label>
                                    <input type="text" class="form-control" id="categoryName" name="categoryName"
                                           placeholder="Enter Category name">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email
                                        with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="priority">Priority</label>
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" id="priority" name="priority">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="status">Status</label>
                                            <div class="form-group mb-3">
                                                <select class="form-control" id="status" name="status">
                                                    <option selected>Active</option>
                                                    <option value="1">Inactive</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mb-0">Submit</button>
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                                <div class="card-body text-center">
                                    <i class="iconsminds-money-bag" style="font-size: 100px; line-height: 166px;"></i>
                                    <p class="card-text font-weight-semibold mb-0">Total Enlisted Payment Methods</p>
                                    <p class="lead text-center">16</p>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Enlisted Payment Methods</h5>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bank Deposit</td>
                                    <td>Active</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>bKash</td>
                                    <td>Active</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Rocket</td>
                                    <td>Inactive</td>
                                    <td>@fat</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
@push('scripts')

@endpush

