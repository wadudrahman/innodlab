<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function showJobCategoryManagementView()
    {
        return view('jobCategoriesManagement');
    }
}
