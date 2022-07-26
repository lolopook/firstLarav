<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// C'est un tableau qui comprends 2 éléments le promier le pages et le second la méthode qu'on veut
Route::get('/',[PagesController::class, "home"])->name("home");

// Ici je crée une nouvelle route pour que le message "hello wold"
Route::get('/a-propos',[PagesController::class, "about"])->name("about");
Route::get("/contact", [PagesController::class,"contact"])->name("contact");
Route::get("/cars", [CarController::class, "index"])->name("cars.index");
Route::get("/cars/{car}", [CarController::class, "show"])->name("cars.show");