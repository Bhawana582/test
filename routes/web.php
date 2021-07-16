<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Models\Company;
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
    return view('auth.login');
});


//company
Route::get('/company/{itr?}',[CompanyController::class,'index'])->name('company');
Route::get('user/logout', [CompanyController::class, 'logout'])->name('user.logout');
Route::get('add/company', [CompanyController::class, 'add'])->name('add.company');


//employee
Route::get('/employee/{itr?}',[EmployeeController::class,'index'])->name('employee');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard1', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/dashboard',[CompanyController::class,'index'])->name('dashboard1');

