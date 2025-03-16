<?php

namespace Database\Factories;

use App\Models\Responsible;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'responsible_id' => Responsible::inRandomOrder()->first()->id,
            'title' => $faker->sentence(5),
            'description' => $faker->paragraph(),
            'deadline' => now()->addDays(rand(1, 30)),
            'status' => $faker->randomElement(['to-do', 'in-progress', 'done']),
            'ia_manager' => $faker->boolean(),
            'ia_path' => $faker->text(),
            'priority' => $faker->randomElement(['high', 'mid', 'low']),
        ];
    }
}
