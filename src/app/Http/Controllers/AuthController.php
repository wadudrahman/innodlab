<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginView()
    {
        return view('login');
    }

    public function showPackagesView()
    {
        return view('packages');
    }

    public function showRegistrationOptionsView()
    {
        $userRoles = null;

        return view('registrationOptions', compact('userRoles'));
    }
}
