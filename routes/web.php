<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\DepartmentController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('dealers', DealerController::class);

Route::resource('assignments', AssignmentController::class);

Route::resource('areas', AreaController::class);

Route::resource('departments', DepartmentController::class);
