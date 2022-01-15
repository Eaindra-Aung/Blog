<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;
use App\Models\Category;
use Faker;

class CategoryFactory extends Factory
{
    protected $model = Category::class;//Had error before
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->unique()->word(),
            'slug'=>$this->faker->unique()->slug()
        ];
    }
}
