<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PegawaiController;
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

Route::get('/', [BerandaController::class, 'index'])->name('beranda');
Route::get('/data-pegawai', [PegawaiController::class, 'index'])->name('data-pegawai');
Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');
Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai');
