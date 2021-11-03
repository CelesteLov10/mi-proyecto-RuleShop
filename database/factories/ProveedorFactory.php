<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proveedor;

class ProveedorFactory extends Factory
{
    protected $model = Proveedor::class;
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
            'direccion'=>$this->faker->address,
            'no identidad'=>$this->faker->numerify('####-')
             .$this->faker->numberbetween(1950,2005)
             .$this->faker->numerify('-#####'),
            'fecha'=>$this->faker->dateTimeBetween('1 day','1 years')
        ];
    }
}
