<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentManagementView()
    {
        return view('paymentManagement');
    }
    public function showPaymentRequestView()
    {
        return view('paymentRequest');
    }
}
