@extends('layouts.app')

@section('title', 'Job Categories Management')

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
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Category</h5>

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
                                    <i class="iconsminds-folder" style="font-size: 100px; line-height: 166px;"></i>
                                    <p class="card-text font-weight-semibold mb-0">Total Enlisted Categories</p>
                                    <p class="lead text-center">2</p>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Enlisted Job Categories</h5>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="text-center" scope="col">#</th>
                                    <th class="text-center" scope="col">Title</th>
                                    <th class="text-center" scope="col">Priority</th>
                                    <th class="text-center" scope="col">Status</th>
                                    <th class="text-center" scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Ready Made Garments (RMG)</td>
                                    <td>1</td>
                                    <td>Active</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-xs btn-outline-info mb-1">Inactive</button>
                                        <button type="button" class="btn btn-xs btn-outline-warning mb-1">Edit</button>
                                        <button type="button" class="btn btn-xs btn-outline-danger mb-1">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Web Design</td>
                                    <td>2</td>
                                    <td>Inactive</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-xs btn-outline-info mb-1">Active</button>
                                        <button type="button" class="btn btn-xs btn-outline-warning mb-1">Edit</button>
                                        <button type="button" class="btn btn-xs btn-outline-danger mb-1">Delete</button>
                                    </td>
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

