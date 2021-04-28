<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUserListView()
    {
        return view('userList');
    }
    public function showAddUserView()
    {
        return view('addUser');
    }
}
