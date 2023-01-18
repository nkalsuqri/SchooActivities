<?php

use App\Http\Controllers\Add;
use App\Http\Controllers\ClassRoomeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\SubjectsController;
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
    return view('welcome1');
});
Route::resource('classroome',ClassRoomeController::class);
Route::resource('semester',SemesterController::class);
Route::resource('resource',ResourceController::class);
Route::resource('subjects',SubjectsController::class);
Route::resource('type-info',SubjectsController::class);




