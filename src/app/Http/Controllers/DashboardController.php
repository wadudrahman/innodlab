<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboardView()
    {
        return view('panel.dashboard');
    }

    public function showUsersView()
    {
        return view('panel.users');
    }

    public function showChatsView()
    {
        return view('panel.chats');
    }
}
