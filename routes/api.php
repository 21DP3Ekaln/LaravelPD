<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\kurssController;

Route::post("/kursi",[kurssController::class, "store"]);
Route::get("/kursi",[kurssController::class, "index"]);



