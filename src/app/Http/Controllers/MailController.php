<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function showInboxView()
    {
        return view('inbox');
    }

    public function showSendMailView()
    {
        return view('sendMail');
    }
}
