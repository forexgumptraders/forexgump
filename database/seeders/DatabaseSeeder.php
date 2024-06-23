<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Category;
use App\models\Product;
use App\models\Tag;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      Storage::deleteDirectory('posts');
    	Storage::makeDirectory('posts');

      // Storage::deleteDirectory('products');
      // Storage::makeDirectory('products');


      Storage::deleteDirectory('articles');
      Storage::makeDirectory('articles');


      $this->call(RoleSeeder::class);

       $this->call(UserSeeder::class);
       Category::factory(4)->create();
       Tag::factory(8)->create();
       $this->call(IconoSeeder::class);
       $this->call(PostSeeder::class);
       $this->call(ArticleSeeder::class);


      //  Product::factory(0)->create();
  
    }
}
