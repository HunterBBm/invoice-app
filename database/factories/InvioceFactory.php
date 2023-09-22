<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvioceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->numberBetween(10, 1000),
            'customer_id' => $this->faker->numberGetween(1, 20),
            'date' => $this->faker->date,
            'due_date' => $this->faker->date,
            'reference' => 'REF-'.rand(10, 500),
            'terms_and_conditions' => $this->faker->parageaph(2),
            'sub_total' => $this->faker->numberGetween(100, 1000),
            'discount' => $this->faker->numberGetween(10, 100),
            'total' => $this->faker->numberGetween(20, 2000),
        ];
    }
}
