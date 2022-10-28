<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

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

//pendaftaran
Route::resource('pendaftaran',PendaftaranController::class)->except('destroy');
Route::get('delpendaftaran/{id}', [PendaftaranController::class, 'destroy'])
 ->name('pendaftaran.destroy');
