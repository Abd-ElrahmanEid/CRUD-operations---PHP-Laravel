<?php

use App\Http\Controllers\StudentController;
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


Route::get('student/index', [StudentController::class, 'index']);
Route::get('student/show/{student}', [StudentController::class, 'show']);
Route::get('student/destroy/{student}', [StudentController::class, 'destroy']);

Route::get('student/edit/{student}', [StudentController::class, 'edit']);
Route::post('student/update/{student}', [StudentController::class, 'update']);

Route::get('student/create', [StudentController::class, 'create']);
Route::post('student/store', [StudentController::class, 'store']);




