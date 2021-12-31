<?php

namespace App\Observers;

use App\Models\Article;

use Illuminate\Support\Facades\Storage;

class ArticleObserver
{
  
    public function creating(Article $article)
    {
        
        if (! \App::runningInConsole()) {
            $article->user_id = auth()->user()->id;
        }
    }

 
    public function deleting(Article $article)
    {
         if ($article->image) {
            Storage::delete($article->image->url);
        }    }

}
