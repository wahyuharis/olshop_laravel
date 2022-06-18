<?php

use App\Http\Controllers\admin\AdmHomeController;
use App\Http\Controllers\admin\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/', [AdmHomeController::class, 'index']);
Route::get('/admin/home', [AdmHomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/login/submit', [LoginController::class, 'submit']);
