<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Producto;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre producto'=>$this->faker->word,
            'cantidad'=>$this->faker->numberbetween(1,1000),
            'fecha'=>$this->faker->dateTimeBetween('1 day','1 years'),
            'categoria'=>$this->faker->word
        ];
    }
}
