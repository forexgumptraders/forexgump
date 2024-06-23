<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icono extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre', 'ruta_completa_imagen', 'nav_color', 'text_color', 'dark_mode',
    ];
    
}
