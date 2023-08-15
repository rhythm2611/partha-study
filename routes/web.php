<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\HomeController;

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

// Route::get('/test', 'Admin\HomeController@index');
Route::get('/', [RegisterController::class, 'index']);
Route::get('/view', [RegisterController::class, 'view']);
Route::get('/aadhaar', [RegisterController::class, 'show_aadhaar']);
Route::get('/aadhaar_phone', [RegisterController::class, 'show_aadhaar_phone']);
Route::get('/add_activity', [RegisterController::class, 'add_activity']);
Route::get('/add_student', [RegisterController::class, 'add_student']);
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
  Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
  Route::get('/users', [HomeController::class, 'users'])->name('users.list');
});


