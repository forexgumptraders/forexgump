<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['article_id','user_id', 'type']; // Asegúrate de que 'type' esté en la lista de atributos rellenables

    public function article()
    {
        return $this->belongsTo(Article::class, 'article_id');
    }     

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
