<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Route::get('/students/index', [StudentController::class, 'index'])->name('student.index');
//Route::post('/students/store', [StudentController::class, 'store'])->name('student.store');
//Route::get('/students/create', [StudentController::class, 'create'])->name('student.create');
Route::get('/users/formlog', [UserController::class, 'formlog']);
Route::get('/users/formreg', [UserController::class, 'formreg']);
Route::resource('user', UserController::class);
Route::resource('student', StudentController::class);

