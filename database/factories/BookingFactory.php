<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\Customer;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => $this->faker->numberBetween(1,10000000),
            'customer_id' => Customer::factory(),
            'service_id' => Service::factory(),
            'business_id' => Business::factory(),
            'booking_date' => $this->faker->dateTime(now()),
            'status' => $this->faker->sentence(),
            'note' => $this->faker->text()
        ];
    }
}
