<?php

namespace Database\Seeders;

use App\Models\Responsible;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResponsibleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Responsible::factory(5)->create();

        $faker = Factory::create('pt_BR');

        Responsible::create([
            'name' => $faker->name(),
            'function' => 'Faz Tudo'
        ]);
    }
}
