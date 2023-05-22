<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticleController extends Controller
{
    public function listArticles(){
        $articles = Articles::all();
        return view('list', compact('articles'));
    }

    public function addArticles(){
        return view('add');
    }

    public function storeArticles(Request $request){
        $article = new Articles();
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->prix = $request->prix;
        $article->save();
        return redirect('list_articles');
    }
}
