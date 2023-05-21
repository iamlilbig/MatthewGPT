<?php

use App\Http\Controllers\ChatGPTController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/",[ChatGPTController::class,"create"])->name("chatGPT.create");

Route::post('/',[ChatGPTController::class,"store"])->name("chatGPT.home");
