<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

      public function article(){
        return $this->belongsTo(Article::class);
    }


    //relacion uno a uno polimorfica

    public function image(){
    	return $this->morphOne(ImageArticle::class, 'imageable');
    }
}
