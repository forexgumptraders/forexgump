<?php

namespace Database\Seeders;
use App\Models\Icono;

use Illuminate\Database\Seeder;

class IconoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Icono::create([
            'nombre' => 'icono',
            'nav_color' => '#1f2937', 
            'text_color' => '#ffffff',
            'dark_mode' => false,
            
        ]);
    }
}
