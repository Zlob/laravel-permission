<?php

Route::group(['prefix' => config('laravel-permission.routes.base_route').'/api'], function () {
    Route::resource('role', 'Spatie\Permission\Controllers\Api\RoleController', ['only' => [
        'index', 'show', 'store', 'update', 'destroy'
    ]]);

    Route::resource('permission', 'Spatie\Permission\Controllers\Api\PermissionController', ['only' => [
        'index', 'show', 'store', 'update', 'destroy'
    ]]);

    Route::resource('role.permission', 'Spatie\Permission\Controllers\Api\RolePermissionController', ['only' => [
        'index', 'show', 'store', 'update', 'destroy'
    ]]);

});

