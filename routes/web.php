<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

Route::get('/', [BasicController::class, "index"])->name("home");  // псевдонимы

Route::get('/about', [BasicController::class, "about"])->name("about");  // псевдонимы

Route::get('/contact', [BasicController::class, "contact"])->name("contact");  // псевдонимы

Route::post('/contact', [BasicController::class, "submit"])->name("contact.post");  // псевдонимы

// Route::post('/contact', function () {
//     // dd(Request::all()); // dd - красиво вывести программные обьекты
//     return redirect("/contact")->withInput(); // redirect - переадрисация // withInput - при переадрисации переносим данные

// })->name("contact.post");   // псевдонимы