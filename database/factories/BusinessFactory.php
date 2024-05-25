<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
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
            'business_name' => $this->faker->lastName(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'description' => $this->faker->paragraph(),
            'p_iva' => Str::random(11),
            'weekDayOpen' => $this->faker->dayOfWeek(),
            'opening_time' => $this->faker->time(),
            'closing_time' => $this->faker->time()
        ];
    }
}
