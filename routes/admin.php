<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('users', function () {
        return "this is all users on admin dashboard";
    });

});
Route::prefix('superadmin')->group(function () {

    Route::get('users', function () {
        return "this is all users on superadmin dashboard";
    });

});
