<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Profile\UpdatePasswordController;

Route::prefix('update-password')->group(function () {
    Route::get('/', [UpdatePasswordController::class, 'edit'])->name('password.edit');
    Route::put('/', [UpdatePasswordController::class, 'updatePassword']);
});
