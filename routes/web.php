<?php

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

Route::get('/', 'HomeController@index');

Route::get('/account', 'HomeController@profile');

Route::resource('/employees', 'EmployeeController');
/*Route::get('/employeesInsert', 'EmployeeController@store');
Route::get('/employeesUpdate', 'EmployeeController@update');
Route::get('/employeesDelete', 'EmployeeController@destroy');*/

// Route::get('/login', 'EmployeeController@login_form');
// Route::post('/login', 'EmployeeController@login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


