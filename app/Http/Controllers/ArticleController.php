<?php

namespace App\Http\Controllers;

use App\Models\Article;
//use Kelompok1\StarRating\RatingContract;

class ArticleController extends Controller
{

    public function articleIndex(){
        $article = Article::latest()->paginate(6);
        return view('article.index', compact('article'));
    }

    public function showArticle($id){
        $article = Article::where('id', $id)->get()->first();
//        $rating = $ratingContract->calculateRating($id);
//        $comment = $ratingContract->showComment($id);

        return view('article.show')->with(['article' => $article]);
    }
}
