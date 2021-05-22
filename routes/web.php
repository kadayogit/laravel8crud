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


//add html form view route
Route::view('/add','add');

//add employee route
Route::post('/add',[EmployeeController::class, 'addEmployee']);

//fetch employee record route
Route::get('/',[EmployeeController::class, 'getEmployee']);

//delete employee route
Route::get('delete/{id}',[EmployeeController::class, 'delete']);

//edit employee route
Route::get('edit/{id}',[EmployeeController::class, 'editEmployee']);

//update employee route
Route::post('editemployee',[EmployeeController::class, 'update']);
