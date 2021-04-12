<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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



Route::get('/', [StudentController::class, 'index'])->name('allStd');
Route::get('/add_student', [StudentController::class, 'create']);
Route::post('/add_student', [StudentController::class, 'store'])->name('addStd');
Route::get('/editStd/{roll}', [StudentController::class, 'edit'])->name('editStd');
Route::post('/update_std', [StudentController::class, 'update'])->name('updateStd');
Route::get('/dltStd/{roll}', [StudentController::class, 'destroy'])->name('std_delete');