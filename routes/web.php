<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::Get("/", [HomeController::class, "index"]);

Route::post('/submit-data', [HomeController::class, 'store'])->name('home.store');


//Route in student
//Route in student
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::post('/student-add', [StudentController::class, 'store'])->name('student.store');
Route::get('/student/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}', [StudentController::class, 'update'])->name('student.update');


Route::delete('/student/delete/{id}', [StudentController::class, 'destroy'])->name('student.destroy');