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

    public function showJobDetails()
    {
        return view('jobDetails');
    }

    public function showMyJobBoardView()
    {
        return view('myJobBoard');
    }
    public function showJobBoardView()
    {
        return view('jobBoard');
    }
    public function showFromEmailView()
    {
        return view('fromEmail');
    }
    public function showFromSystemView()
    {
        return view('fromSystem');
    }
    public function showJobRequestView()
    {
        return view('jobRequest');
    }
    public function showOnBoardJobListView()
    {
        return view('onBoardJobList');
    }
    public function showOngoingJobView()
    {
        return view('ongoingJob');
    }
    public function showSubmittedJobView()
    {
        return view('submittedJob');
    }
    public function showRevisionJobView()
    {
        return view('revisionJob');
    }
    public function showCompletedJobView()
    {
        return view('completedJob');
    }
    public function showPendingJobsView()
    {
        return view('pendingJobs');
    }
}
