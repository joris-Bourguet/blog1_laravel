<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Models\Article;

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


// Article routing
Route::get('/', [ArticleController::class, 'index'])->name('article.index');
Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('article/{slug}', [ArticleController::class, 'show'])->name('article.show');
Route::get('article/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('article/update', [ArticleController::class, 'update'])->name('article.update');

// Auth routing
Route::get('/connexion', function () {
    return view('auth.login');
})->name('connexion');

Route::get('/inscription', function () {
    return view('auth.register');
})->name('inscription');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
