<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\CreateArticleRequest;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('article.index', ['articles' => Article::all()]);
    }

    public function show(Article $article): View
    {
        //TODO: implement this so it searches in the respective directory for an posted blog
        return view('article.show', ['article' => $article]);
    }

    public function create(): View|RedirectResponse
    {
        // Maybe move this into Article policies
        if (!auth()->user()->can('create-articles')) {
            return redirect()->route('articles')->withErrors('You do not have permission to create articles.');
        }
        return view('article.create');
    }

    public function save(CreateArticleRequest $request)
    {
        $validData = $request->validated();
        $article = new Article();
        $article->fill($validData);

        if (!$article->save()) {
            return redirect()->back()->withErrors('We were not able to save the article.');
        }

        return redirect()->back()->with('success', 'Article created.');
    }
}
