<?php

namespace Database\Factories;

use App\Models\movies;
use Illuminate\Database\Eloquent\Factories\Factory;

class moviesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = movies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'synopsis' => $this->faker->word,
        'rating' => $this->faker->word,
        'director' => $this->faker->word,
        'id_genres' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
