<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;

Route::prefix('setting')->group(function () {
    Route::get('/', [ConfigController::class, 'edit'])->name('setting.edit');
    Route::patch('/', [ConfigController::class, 'update'])->name('setting.update');
});
