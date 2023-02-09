<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\BlogPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // return [
            'title' => $this->faker->sentence(10),
            'content' => $this->faker->paragraphs(5, true)
        
        ];
    }

    public function newTitle()
    {
        return $this->state([
            'title' => 'New title',
        ]);
    }
}
