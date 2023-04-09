<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutsController;
use App\Http\Controllers\PencatatanController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TotalTagihanController;
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

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/test', function () {
    return view('test');
});


Route::get('/dashboard/Pencatatan', function () {
    return view('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Jalur Proses Login
// Route::controller(LoginController::class)->group(function () {
//     Route::get('login', 'index')->name('login');
//     Route::post('login/proses', 'proses');
//     Route::get('logout', 'logout')->name('logout');
// });

Route::get('/dashboard', [LayoutsController::class, 'index'])->middleware('IsLogin');
Route::post('/dashboard', [LayoutsController::class, 'home'])->middleware('IsLogin');



// Jalur Proses Pencatatan
Route::resource('Pencatatan', PencatatanController::class)->middleware('IsLogin');

// Jalur Proses Bayar
Route::resource('TotalTagihan', TotalTagihanController::class)->middleware('IsLogin');

// Jalur Session Login
Route::get('/sesi', [SessionController::class, 'index'])->middleware('IsTamu');
Route::post('/sesi/login', [SessionController::class, 'login'])->middleware('IsTamu');
Route::get('/sesi/logout', [SessionController::class, 'logout']);

// Route::controller(SessionController::class)->group(function () {
//     Route::get('/sesi', 'index')->name('login');
//     Route::post('/sesi/login', 'login');
//     Route::get('/sesi/logout', 'logout')->name('logout');
// });
