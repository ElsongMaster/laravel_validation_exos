<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nom"=>$this->faker->name,
            "texte_auteur"=>$this->faker->text($maxNbChars = 20),
            "note"=>$this->faker->numberBetween($min = 1, $max = 5)
        ];
    }
}
