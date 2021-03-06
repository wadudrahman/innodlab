<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function showJobCategoryManagementView()
    {
        return view('jobCategoriesManagement');
    }

    public function showAddJobView()
    {
        return view('addJob');
    }

    public function showJobListView()
    {
        return view('jobList');
    }

    public function showJobDetails($jobId)
    {
        return view('jobDetails');
    }
}
