<?php


namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Requests\StoreArticlesRequest;
use App\Tag;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{

    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        $tags = Tag::get()->pluck('name', 'id');
        return view('admin.articles.create', compact('tags'));
    }

    public function store(StoreArticlesRequest $request)
    {
        $article = Article::create($request->all());
        $article->tag()->sync((array)$request->input('tag'));
        return redirect()->route('admin.articles.index');
    }

    public function edit($id)
    {
        $tags = Tag::get()->pluck('name', 'id');
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article', 'tags'));
    }

    public function update(StoreArticlesRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        $article->tag()->sync((array)$request->input('tag'));
        return redirect()->route('admin.articles.index');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.articles.index');
    }
}
