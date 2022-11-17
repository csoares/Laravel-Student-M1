<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;
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



Route::get('/', [RoutingController::class, 'index']);
Route::get('/about', [RoutingController::class, 'about']);


Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);


Route::get('/students/show/{student}', [StudentController::class, 'show']);
Route::get('/students/edit/{student}', [StudentController::class, 'edit']);
Route::post('/students/update/{student}', [StudentController::class, 'update']);
Route::post('/students/destroy/{student}', [StudentController::class, 'destroy']);