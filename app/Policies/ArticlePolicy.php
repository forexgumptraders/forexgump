<?php

namespace App\Policies;
use App\Models\Article;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
{
    use HandlesAuthorization;

    public function author(User $user, Article $article){
        if ($user->id == $article->user_id) {
            return true;
        }else{
            return false;
        }
    }

    public function published(?User $user, Article $article){
        if ($article->status == 2) {
            return true;
        }else{
            return false;
        }
    }
}