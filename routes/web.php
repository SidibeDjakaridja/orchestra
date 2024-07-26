<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeadershipController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('accueil');
Route::get('/accueil', [HomeController::class, 'home'])->name('accueil');

Route::get('/blog', [HomeController::class, 'indexBlog'])->name('blog.index');

Route::get('/work', [HomeController::class, 'indexWork'])->name('work.index');

Route::get('/work/show', [HomeController::class, 'showWork'])->name('work.show');

Route::get('/leadership/show', [LeadershipController::class, 'show'])->name('leadership.show');

