<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ArticleController;

Route::get('/public/articles', function () {
    $article = \App\Models\Article::where('public', '=', true)->get();
    return view('public-articles', ["articles" => $article]);
})->name('public.articles');

Route::middleware('auth')->group(function () {
    Route::get("/article", [ArticleController::class, "index"])->name("articles");
});
