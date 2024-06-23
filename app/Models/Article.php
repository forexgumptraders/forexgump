<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;
use Illuminate\Support\Facades\Auth;


class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];


      public function article(){
        return $this->belongsTo(Article::class);
    }

    public function user()
{
    return $this->belongsTo(User::class);
}


    //relacion uno a uno polimorfica

    public function image(){
    	return $this->morphOne(ImageArticle::class, 'imageable');
    }

    
        public function getCreatedAtAttribute($date){

        return new Date($date);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class)->where('type', 'like');
    }
    
    public function dislikes()
    {
        return $this->hasMany(Like::class)->where('type', 'dislike');
    }
    
    public function hasLiked($type)
    {
        $user = Auth::user();
    
        if (!$user) {
            return false; // El usuario no está autenticado
        }

    
        // Verificar si el usuario ha realizado una acción específica en este artículo
        return $this->likes()->where('user_id', $user->id)->where('type', $type)->exists();
    }
    
}
