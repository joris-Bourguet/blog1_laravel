<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderByDesc('created_at')->paginate(6);

        return view('article.index', [
            'articles' => $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = Article::create([
            'title' => $request->title,
            'slug' => create_slug($request->title),
            'shortdescription' => $request->shortDesc,
            'description' => $request->description
        ]);

        return redirect()->route('article.index')->with('success', 'article ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('article.show')->with('article', $article);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($article)
    {
        $article = Article::where('id', $article)->firstOrFail();

        return view('article.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validator = $request->validate([
            'id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'shortDescription' => 'required',
        ]);

        $article = Article::find($request->id)
        ->update([
            'title' => $request->title,
            'slug' => create_slug($request->title),
            'shortdescription' => $request->shortDescription,
            'description' => $request->description,
        ]);

        return redirect()->route('article.show', ['slug' => Article::find($request->id)->slug]);
        // return view('article.show', ["slug" => $request->slug])->with('article', Article::find($request->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
