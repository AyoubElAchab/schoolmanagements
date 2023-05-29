<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiant>
 */
class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->firstname,
            'prenom'=>fake()->lastname,
            'adresse'=>fake()->address,
            'dateNaissance'=>fake()->date(),
            'idclasse'=>rand(1,10)
        ];
    }
}
