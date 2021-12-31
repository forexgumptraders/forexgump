<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       $title = $this->faker->unique()->sentence();

        return [
            'title' => $title,
            // 'slug' => Str::slug($title),
            'sl' =>$this->faker->text(20), 
            'tp' => $this->faker->text(20),
            'entrada' => $this->faker->text(20),
            'body' => $this->faker->text(2000),
            'status' => $this->faker->randomElement([1, 2]),
            'user_id' => User::all()->random()->id
         ];
    }
}
