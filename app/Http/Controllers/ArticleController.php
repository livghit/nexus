<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('articles', ["articles" => Article::all()]);
    }

    public function show(Article $article): View
    {
        //TODO: implement this so it searches in the respective directory for an posted blog
        return view('article', ["article" => $article]);
    }
}
