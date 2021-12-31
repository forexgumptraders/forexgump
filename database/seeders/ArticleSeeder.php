<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\ImageArticle;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $articles = Article::factory(99)->create();

       foreach ($articles as $article) {
       		
       		ImageArticle::factory(1)->create([
       			'imageable_id' => $article->id,
       			'imageable_type' => Article::class
       		]);

       }

    }
}
