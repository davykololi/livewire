<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->text(10),
            'desc' => $this->faker->sentence(15, true),
            'keywords' => $this->faker->word(5),
            'slug' => Str::slug($this->faker->sentence(10)),
        ];
    }
}
