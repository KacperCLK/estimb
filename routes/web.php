<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

Route::get("", fn () => to_route('home.index'))->name('home');
Route::resource("home", HomePageController::class)
    ->only("index");
