<?php

use App\Http\Controllers\AbcController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\NameController;
use App\Http\Controllers\NewController;
use Illuminate\Support\Facades\Route;

Route::get('dashboard/{hitung?}', [NewController::class, "first"])->name("first");
Route::post('evakuasi', [NewController::class, "hitungdata"])->name("hitung");
Route::get('name/{tmp?}', [NameController::class, "first"])->name("nama");
Route::post('nameclass', [NameController::class, "input"])->name("name");
Route::get('biodata/{tmp}', [NameController::class, "biodata"])->name("data");
Route::get('book/{tmp}', [InputController::class, "utama"])->name("nm_book");
Route::post('input', [InputController::class, "input"])->name("input");
Route::get('bookname/{tmp}', [InputController::class, "book"])->name("book");
Route::get("abc", [AbcController::class, "view"])->name("abc");
Route::get('/', function () {
    return view('welcome');
});
