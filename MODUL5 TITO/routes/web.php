<?php

use App\Http\Controllers\RegisterController;
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
    return view('Utama');
});

Route::get('/home', function () {
    return view('homee');
});

Route::get('/regis', function () {
    return view('register');
});
Route::resource('register', RegisterController::class);

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');


Route::get('detail', [ShowroomController::class, 'detail'])->name('detail');

Route::get('detail/{id}', [ShowroomController::class, 'detail'])->name('detail-car');
Route::get('edit/{id}', [ShowroomController::class, 'edit'])->name('edit-car');


