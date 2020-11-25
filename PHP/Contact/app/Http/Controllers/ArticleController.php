<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->get("search");
        if($search){
            $articles = Article::where('title', 'like', '%'.$search.'%')->get();
        }else{
            $articles = Article::all();
        }
        return view("articles.index", ["articles" => $articles, "search" => $search]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $published = $request->input('published', '0');

        $article = new Article;
        $article->title = $title;
        $article->description = $description;
        $article->published = $published;
        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view("articles.show", ["article" => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("articles.edit", ["article" => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $title = $request->input('title');
        $description = $request->input('description');
        $published = $request->input('published', '0');

        $article = Article::find($article->id);
        $article->title = $title;
        $article->description = $description;
        $article->published = $published;
        $article->save();
        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index');
    }

    public function details(int $id) {
        $article = Article::find($id);
        return view("articles.show", ["article" => $article]);
    }
}
