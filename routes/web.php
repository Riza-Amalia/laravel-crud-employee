<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\CutiController;
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
Route::get('/data-pegawai-first3', [PegawaiController::class, 'first3'])->name('data-pegawai-first3');
Route::get('/create-pegawai', [PegawaiController::class, 'create'])->name('create-pegawai');
Route::post('/simpan-pegawai', [PegawaiController::class, 'store'])->name('simpan-pegawai');
Route::get('/edit-pegawai/{id}', [PegawaiController::class, 'edit'])->name('edit-pegawai');
Route::post('/update-pegawai/{id}', [PegawaiController::class, 'update'])->name('update-pegawai');
Route::get('/delete-pegawai/{id}', [PegawaiController::class, 'destroy'])->name('delete-pegawai');

Route::get('/data-cuti', [CutiController::class, 'index'])->name('data-cuti');
Route::get('/sisa-cuti', [CutiController::class, 'sisaCuti'])->name('sisa-cuti');
Route::get('/ambil-cuti', [CutiController::class, 'ambilCuti'])->name('ambil-cuti');
Route::get('/create-cuti', [CutiController::class, 'create'])->name('create-cuti');
Route::post('/simpan-cuti', [CutiController::class, 'store'])->name('simpan-cuti');
Route::get('/edit-cuti/{id}', [CutiController::class, 'edit'])->name('edit-cuti');
Route::post('/update-cuti/{id}', [CutiController::class, 'update'])->name('update-cuti');
Route::get('/delete-cuti/{id}', [CutiController::class, 'destroy'])->name('delete-cuti');
