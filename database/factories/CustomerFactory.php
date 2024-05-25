<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(0, 1000000000),
            'name' => $this->faker->name(),
            'surname' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'fiscal_code' => Str::random(16),
            'password' => $this->faker->password(6, 20),
            'role' => $this->faker->boolean(false),
            'creation_date' => $this->faker->dateTime('2023-04-05 15:45:34')
        ];
    }
}
