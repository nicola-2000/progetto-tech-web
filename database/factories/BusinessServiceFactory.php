<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Business;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BusinessService>
 */
class BusinessServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'service_id' => $this->faker->numberBetween(1, 10),
            'business_id' => Business::inRandomOrder()->id ?? Business::factory('business_id'),
            'service_name' => $this->faker->userName(),
            'description' => $this->faker->text(200),
            'price' => $this->faker->randomFloat(2, 1.00, 1000.00)
        ];
    }
}
