<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\personal>
 */
class personalFactory extends Factory
{
    use HasFactory;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'nombre' => fake()->name(),
            'app' => fake()->lastName(),
            'apm' => fake()->lastName(),
            'dni' => fake()->randomNumber(8, true),
            'id_cargo' => 1,
            'sueldo' => fake()->randomFloat(2, 500, 5000),
            'habilitado' => fake()->boolean()
        ];
    }
}
