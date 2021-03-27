<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\ResetPasswordController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/map', [HomeController::class,'map']);
Route::get('/map-details/{id}', [HomeController::class,'mapDetails']);
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
        // Customer Routes
        Route::get('dashboard/customer', [CustomerController::class,'index'])->name('customer');
        Route::get('dashboard/create-customer', [CustomerController::class,'create']);
        Route::post('dashboard/store-customer', [CustomerController::class,'store']);
        Route::post('dashboard/customer/delete/{id}', [CustomerController::class,'destroy']);
        Route::get('dashboard/customer/edit/{id}', [CustomerController::class,'edit']);
        Route::post('dashboard/customer/update/{id}', [CustomerController::class,'update']);

        // Agent Routes
        Route::get('dashboard/agent', [AgentController::class,'index'])->name('agent');
        Route::get('dashboard/create-agent', [AgentController::class,'create']);
        Route::post('dashboard/store-agent', [AgentController::class,'store']);
        Route::post('dashboard/agent/delete/{id}', [AgentController::class,'destroy']);
        Route::get('dashboard/agent/edit/{id}', [AgentController::class,'edit']);
        Route::post('dashboard/agent/update/{id}', [AgentController::class,'update']);

        // Plot Routes
                Route::get('admin/dashboard', [PlotController::class,'dashboard']);
        Route::get('dashboard/plot', [PlotController::class,'index'])->name('plot');
        Route::get('dashboard/create-plot', [PlotController::class,'create']);
        Route::post('dashboard/store-plot', [PlotController::class,'store']);
        Route::post('dashboard/plot/delete/{id}', [PlotController::class,'destroy']);
        Route::get('dashboard/plot/edit/{id}', [PlotController::class,'edit']);
        Route::post('dashboard/plot/update/{id}', [PlotController::class,'update']);

Route::get('admin/create-admin', [HomeController::class,'create']);
Route::post('admin/store-admin', [HomeController::class,'store']);
Route::get('/admin/account', [HomeController::class, 'account']);
Route::post('admin/account/update/{id}', [HomeController::class,'update_account']);
Route::get('/admin/lists', [HomeController::class, 'admin_lists']);
Route::post('admin/delete/{id}', [HomeController::class,'destroy']);
Route::get('admin/edit/{id}', [HomeController::class,'edit']);
Route::post('admin/update/{id}', [HomeController::class,'update']);


Route::post('admin/reset-password', [ResetPasswordController::class,'reset_password']);
Route::post('admin/change-password', [ResetPasswordController::class,'change_password']);

Route::fallback(
    function () {
        return Redirect::to('/');
    }
);

Route::get('logout', function (){
    \Auth::logout();
    $json = Array();
    return Redirect::to('/');
});