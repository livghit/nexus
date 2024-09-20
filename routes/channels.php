<?php

use App\Models\Article;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('reactions.articles.{articleId}', function (Article $article, $id) {
    return (int) $article->id === (int) $id;
});
