<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Responsible>
 */
class ResponsibleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('pt_BR');

        return [
            'name' => $faker->firstName() . ' ' . $faker->lastName(),
            'function' => $faker->randomElement(['Jardineiro', 'Faxineiro', 'Desenvolvedor', 'Gerente', 'Analista', 'Designer']),
        ];
    }
}
