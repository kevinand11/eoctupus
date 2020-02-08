<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleUpdateRequest;
use App\Http\Requests\ArticleCreateRequest;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function store(ArticleCreateRequest $request)
    {
        return Article::create($request->all());
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function update(ArticleUpdateRequest $request, Article $article)
    {
        return $article->update($request->all());
    }

    public function destroy(Article $article)
    {
        return $article->delete();
    }
}
