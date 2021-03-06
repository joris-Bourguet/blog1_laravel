<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

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

        return [
            'title' =>  $this->faker->sentence('3', true),
            'slug' => create_slug($this->faker->sentence('3', true)),
            'shortdescription' => $this->faker->sentence(),
            'description' => $this->faker->paragraph('4', true),
            'image' => $this->faker->imageUrl()
        ];
    }
}
