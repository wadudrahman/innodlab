<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
//panel routes
Route::get('/panel/dashboard', [DashboardController::class, 'showDashboardView']);
Route::get('/panel/users', [DashboardController::class, 'showUsersView']);
Route::get('/panel/chats', [DashboardController::class, 'showChatsView']);
