<?php

use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(KaryawanController::class)->prefix('karyawan')->group(function() {
    Route::get('', 'index')->name('karyawan');
});
