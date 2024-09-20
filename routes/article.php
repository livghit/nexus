<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/public/articles', function () {
    $article = \App\Models\Article::where('public', '=', true)->get();

    return view('article.public-articles', ['articles' => $article]);
})->name('public.articles');

Route::middleware('auth')->group(function () {
    Route::get('/article', [ArticleController::class, 'index'])->name(
        'articles'
    );
    Route::get('/article/new', [ArticleController::class, 'create'])->name(
        'articles.create'
    );
    Route::post('/article', [ArticleController::class, 'save'])->name(
        'articles.save'
    );
});
