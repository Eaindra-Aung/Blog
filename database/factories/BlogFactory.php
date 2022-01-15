<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\Blog;
use App\Models\User;


class BlogFactory extends Factory
{   
    // @var string []; 
    protected $model = Blog::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'category_id' => Category::factory(),
            'title'=> $this->faker->sentence(),
            'slug' => $this->faker->slug() ,
            'intro' => $this->faker->sentence(),
            'body'=> $this->faker->paragraph(),
            'user_id'=>User::factory()
        
        ];
    }
}
