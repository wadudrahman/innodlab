<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function showStartChatView()
    {
        return view('startChat');
    }
    public function showChatRequestView()
    {
        return view('chatRequest');
    }
}
