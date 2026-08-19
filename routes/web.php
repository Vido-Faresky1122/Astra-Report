<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DealerController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('dealer', DealerController::class);