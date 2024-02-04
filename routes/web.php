<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LaguController;


Route::get('/', [PostController::class,'index']);
Route::get('/paker', [PostController::class,'paker']);

Route::redirect('/', '/lagu');

Route::get('/lagu/', [LaguController::class,'index'])->name('lagu.all');
Route::get('/lagu/tambah', [LaguController::class,'create'])->name('lagu.tambah');
Route::post('/lagu/proses-tambah', [LaguController::class, 'store'])->name('lagu.proses.tambah');
Route::get('/lagu/edit/{id}', [LaguController::class,'edit'])->name('lagu.edit');
Route::put('/lagu/proses-edit/{id}', [LaguController::class,'update'])->name('lagu.proses.edit');
Route::delete('/lagu/hapus/{id}', [LaguController::class,'destroy'])->name('lagu.destroy');
Route::get('/lagu/cari', [LaguController::class,'cari'])->name('lagu.cari');