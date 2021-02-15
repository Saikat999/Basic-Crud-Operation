<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandpageController;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',[LandpageController::class,'landpage']);
Route::get('/',[LandpageController::class,'homepage']);

Route::get('/add-post',[PostController::class,'addEmployee']);
Route::post('/create',[PostController::class,'createEmployee'])->name('create.employee');
Route::get('/get-employee',[PostController::class,'getEmployee'])->name('get.employee');
Route::get('/employee/{id}',[PostController::class,'getEmployeeById'])->name('get.employee.details');
Route::get('/delete-employee/{id}',[PostController::class,'deleteEmployee']);
Route::get('/edit-employee/{id}',[PostController::class,'editEmployee']);
Route::post('/update-employee',[PostController::class,'updateEmployee'])->name('update.employee');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

