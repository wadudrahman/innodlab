<?php

use App\Http\Controllers\{AuthController,
    DashboardController,
    JobController,
    PackageController,
    PaymentController,
    UserController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginView']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/password/reset', [AuthController::class, 'showResetPassword']);
Route::post('/password/reset', [AuthController::class, 'resetPassword']);
Route::get('/packages', [AuthController::class, 'showPackagesView']);
Route::get('/register', [AuthController::class, 'showRegistrationOptionsView']);
Route::get('/register/{userRoleId}', [AuthController::class, 'showPackagesView']);

Route::get('/dashboard', [DashboardController::class, 'showDashboardView']);
Route::get('/jobCategories', [JobController::class, 'showJobCategoryManagementView']);
Route::get('/addJob', [JobController::class, 'showAddJobView']);
Route::get('/jobs', [JobController::class, 'showJobListView']);
Route::get('/jobDetails', [JobController::class, 'showJobDetails']);
Route::get('/userList', [UserController::class, 'showUserListView']);
Route::get('/addUser', [UserController::class, 'showAddUserView']);

Route::get('/packageManagement', [PackageController::class, 'showPackageManagementView']);
Route::get('/addPackage', [PackageController::class, 'showAddPackageView']);
Route::post('/addPackage', [PackageController::class, 'addPackage']);

Route::get('/paymentManagement', [PaymentController::class, 'showPaymentManagementView']);
Route::get('/paymentWithdraw', [PaymentController::class, 'showWithdrawPaymentView']);
Route::get('/withdrawBoard', [PaymentController::class, 'showWithdrawBoardView']);

Route::get('/myJobBoard', [JobController::class, 'showMyJobBoardView']);
Route::get('/jobBoard', [JobController::class, 'showJobBoardView']);
Route::get('/fromEmail', [JobController::class, 'showFromEmailView']);
Route::get('/fromSystem', [JobController::class, 'showFromSystemView']);
Route::get('/jobRequest', [JobController::class, 'showJobRequestView']);
Route::get('/onBoardJobList', [JobController::class, 'showOnBoardJobListView']);
Route::get('/ongoingJob', [JobController::class, 'showOngoingJobView']);
Route::get('/submittedJob', [JobController::class, 'showSubmittedJobView']);
Route::get('/revisionJob', [JobController::class, 'showRevisionJobView']);
Route::get('/completedJob', [JobController::class, 'showCompletedJobView']);
Route::get('/pendingJobs', [JobController::class, 'showPendingJobsView']);
