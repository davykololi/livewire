<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(15),
            'slug' => Str::slug($this->faker->sentence(15)),
            'excerpt' => $this->faker->sentences(3, true),
            'desc' => $this->faker->sentence(2),
            'content' => $this->faker->paragraphs(15, true),
            'featured_image' => "post.png",
            'published_date' => $this->faker->date(),
            'user_id' => 1,
            'category_id' => $this->faker->numberBetween($min=1,$max=20),
        ];
    }
    /**
     * Indicates the post is published.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'is_published' => true,
                'published_date' => now(),
            ];
        });
    }

}
