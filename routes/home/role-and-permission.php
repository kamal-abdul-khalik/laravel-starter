<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Permissions\{
    RoleController,
    UserController,
    AssignController,
    PermissionController
};

Route::prefix('role-and-permission')->namespace('Permissions')->group(function () {
    // Route Permission
    Route::prefix('assigns')->group(function () {
        Route::get('/', [AssignController::class, 'create'])->name('assigns.create');
        Route::post('/', [AssignController::class, 'store'])->name('assigns.store');
        Route::get('{role}/edit', [AssignController::class, 'edit'])->name('assigns.edit');
        Route::put('{role}/edit', [AssignController::class, 'update'])->name('assigns.update');
    });
    //Route User
    Route::prefix('permissionUsers')->group(function () {
        Route::get('/', [UserController::class, 'create'])->name('permissionUsers.create');
        Route::post('/', [UserController::class, 'store'])->name('permissionUsers.store');
        Route::get('{user}/user', [UserController::class, 'edit'])->name('permissionUsers.edit');
        Route::put('{user}/user', [UserController::class, 'update'])->name('permissionUsers.update');
    });

    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('roles.index');
        Route::post('create', [RoleController::class, 'store'])->name('roles.create');

        Route::get('{role}/edit', [RoleController::class, 'edit'])->name('roles.edit');
        Route::put('{role}/edit', [RoleController::class, 'update'])->name('roles.update');
    });

    Route::prefix('permissions')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('permissions.index');
        Route::post('create', [PermissionController::class, 'store'])->name('permissions.create');

        Route::get('{permission}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
        Route::put('{permission}/edit', [PermissionController::class, 'update'])->name('permissions.update');
    });
});
