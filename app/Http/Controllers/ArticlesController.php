<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticlesRequest;
use App\Article;
use App\Menu;
use App\Footer;
use App\Newsletter;
use App\Tag;
use App\Categorie;
use App\PostComment;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.blog.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();

        return view('admin.blog.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticlesRequest $request)
    {
        // $categories = Categorie::all();

        $article = new Article();

        $article->img_path = request('image')->store('image');
        $article->titre = request('titre');
        $article->texte = request('texte');
        $article->categorie_id = request('categorie_id');
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $menus = Menu::all();
        $footers = Footer::all();
        $newsletters = Newsletter::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        $postComments = PostComment::all();

        return view('blog-post.index', compact('article', 'menus', 'footers', 'newsletters', 'tags', 'categories', 'postComments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $categories = Categorie::all();

        return view('admin.blog.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            "titre" => "required|min:2|max:50",
            "texte" => "required|min:2",
        ],
        [
            "titre.required" => "Ecrivez un titre",
            "titre.min" => "Minimum, 2 caractères",
            "titre.max" => "Maximum, 50 caractères",

            "texte.required" => "Ecrivez un texte",
            "texte.min" => "Minimum, 2 caractères",
        ]);

        $categories = Categorie::all();

        $article = Article::find($id);
        //dd($request->file('image'));
        if (request('image')!== null) {
            Storage::delete($article->img_path);
            $article->img_path = request('image')->store('image');
        };

        $article->titre = request('titre');
        $article->texte = request('texte');
        $article->categorie_id = request('categorie_id');
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        Storage::delete($article->img_path);
        $article->delete();

        return redirect()->back();
    }
}
