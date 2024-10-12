<?php

namespace App\Http\Controllers;

use App\Events\UserReactedToArticle;
use App\Http\Requests\Article\CreateArticleRequest;
use App\Http\Requests\ReactToArticleRequest;
use App\Models\Article;
use App\Models\Hashtag;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        return view('article.index', [
            'articles' => Article::all()->sortByDesc('created_at'),
        ]);
    }

    public function show(Article $article): View
    {
        //TODO: implement this so it searches in the respective directory for an posted blog
        return view('article.show', ['article' => $article]);
    }

    public function save(CreateArticleRequest $request)
    {
        $validData = $request->validated(); // Validated data
        $article = new Article();           // Create a new article

        // Fill the article model with validated data
        $article->fill($validData);

        // Save the article
        if (!$article->save()) {
            return redirect()
                ->back()
                ->withErrors('We were not able to save the article.');
        }

        foreach ($validData['hashtags'] ?? [] as $tag) {
            $article->hashtags()->create([
                'tag' => $tag,
            ]);
        }

        return redirect()->back()->with('success', 'Article created.');
    }

    public function create(): View|RedirectResponse
    {
        // Maybe move this into Article policies
        if (!auth()->user()->can('create-articles')) {
            return redirect()
                ->route('articles')
                ->withErrors('You do not have permission to create articles.');
        }

        return view('article.create');
    }

    public function react(ReactToArticleRequest $request)
    {
        $valid = $request->validated();

        dispatch(new UserReactedToArticle($valid->article, $valid->reaction));

        return back()->with('success', 'Reaction registred');
    }
}
