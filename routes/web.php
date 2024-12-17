<?php

use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard', [NewController::class, "first"]);
Route::get('/', function () {
    return view('welcome');
});
