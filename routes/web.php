<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\PostController;

Route::get('/', [BasicController::class, "index"])->name("home");  // псевдонимы

Route::get('/about', [BasicController::class, "about"])->name("about");  // псевдонимы

Route::get('/contact', [BasicController::class, "contact"])->name("contact");  // псевдонимы

Route::post('/contact', [BasicController::class, "submit"])->name("contact.post");  // псевдонимы

Route::get('/posts', [PostController::class, "index"])->name("posts");  // псевдонимы
Route::get('/posts/{id}', [PostController::class, "show"])->name("posts.one");  // псевдонимы
Route::get('/posts/{id}/edit', [PostController::class, "edit"])->name("posts.one.edit");  // псевдонимы
Route::get('/posts/{id}/delete', [PostController::class, "delete"])->name("posts.one.delete");  // псевдонимы
Route::post('/posts/{id}/edit', [PostController::class, "update"])->name("posts.edit");  // псевдонимы

// Route::post('/contact', function () {
//     // dd(Request::all()); // dd - красиво вывести программные обьекты
//     return redirect("/contact")->withInput(); // redirect - переадрисация // withInput - при переадрисации переносим данные

// })->name("contact.post");   // псевдонимы