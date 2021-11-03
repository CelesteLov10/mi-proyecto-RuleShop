<?php

namespace Database\Factories;
use App\Models\Cliente;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=>$this->faker->name,
            'apellido'=>$this->faker->lastname,
            'cantidad'=>$this->faker->numberbetween(1,100),
            'fecha pedido'=>$this->faker->dateTimeBetween('1 day','5 years')
        ];
    }
}
