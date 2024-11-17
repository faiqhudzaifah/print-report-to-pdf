<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\KRSController;

Route::get('/', function () { return view('home'); })->name('home');

Route::get('/import', [ImportController::class, 'index'])->name('import.index'); // Form Import
Route::post('/import/data', [ImportController::class, 'importData'])->name('import.data');

Route::get('/krs', [KRSController::class, 'index'])->name('krs.index');
Route::get('/krs/print/{nim}', [KRSController::class, 'print'])->name('krs.print');
