@extends('layouts.app')

@section('title', 'Payment Withdraw')

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
                            <h5 class="card-title">Request Payment Withdrawal</h5>

                            <form method="post" action="{{ url('') }}">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label for="categoryName">Amount</label>
                                            <input type="text" class="form-control" id="categoryName" name="categoryName"
                                                   placeholder="Enter Amount">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="status">Method</label>
                                            <div class="form-group mb-3">
                                                <select class="form-control" id="status" name="status">
                                                    <option value="0" selected>bKash</option>
                                                    <option value="1">Bank Deposit</option>
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
                                    <i class="iconsminds-money-bag" style="font-size: 50px; line-height: 65px;"></i>
                                    <p class="card-text font-weight-semibold mb-0">Withdrawable Balance</p>
                                    <p class="lead text-center">BDT 16</p>
                                </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Payment Withdrawal History</h5>
                            <table class="table table-bordered">
                                <thead>
                                <tr class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Method</th>
                                    <th scope="col">Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>26/03/2021</td>
                                    <td>BDT 500</td>
                                    <td>bKash</td>
                                    <td>Pending</td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>26/03/2021</td>
                                    <td>BDT 4952</td>
                                    <td>Rocket</td>
                                    <td>Done</td>
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

