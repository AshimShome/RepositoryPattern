<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
//     return view('employeeView');
// });

Route::get('/', [EmployeeController::class, 'EmployeeList'])->name('employee-list');
Route::get('/addForm', [EmployeeController::class, 'addForm'])->name('addForm');
Route::post('/add-employee', [EmployeeController::class, 'addEmployee'])->name('add-employee');
Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [EmployeeController::class, 'delete'])->name('delete');
