<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function showPackageManagementView()
    {
        return view('packageManagement');
    }

    public function showAddPackageView()
    {
        return view('addPackage');
    }
}
