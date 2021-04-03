@extends('layouts.app')

@section('title', 'Payment Withdraw Board')

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Requested By</th>
                                    <th scope="col">Current Balance</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark (mark@gmail.com)</td>
                                    <td>6021</td>
                                    <td>1200</td>
                                    <td>bKash</td>
                                    <td>Pending</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-outline-success">Approve</a>
                                        <a class="btn btn-sm btn-outline-danger">Deny</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark (mark@gmail.com)</td>
                                    <td>6595</td>
                                    <td>1000</td>
                                    <td>Bank Deposit</td>
                                    <td>Done</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-outline-info">View Reference</a>
                                    </td>
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

