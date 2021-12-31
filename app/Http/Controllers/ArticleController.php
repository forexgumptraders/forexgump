<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Article;


class ArticleController extends Controller
{
    public function index(){

        if (request()->page) {
            $key = 'articles' .request()->page;
        }else{
            $key = 'articles';
        }

        if (Cache::has($key)) {
            $articles = Cache::get($key);
            
        } else {
            $articles = Article::where('status', 2)->latest('id')->paginate(8);
            Cache::put($key, $articles);
        }
        

        $articles = Article::where('status', 2)->latest('id')->paginate(8);

        return view('articles.index', compact('articles'));
    }


    public function show(Article $article){

            $this->authorize('published', $article);


    	return view('articles.show', compact('article'));
    }

}
