<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Shop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = $this->faker->numberBetween(16, 21);
        $finish = $start + 2;

        return [
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'shop_id' => $this->faker->numberBetween(1, Shop::count()),
            'scheduled_on' => $this->faker->dateTimeBetween('-4week', '+4week')->format('Y-m-d'),
            'start_at' => $start . ':00',
            'finish_at' => $finish . ':00',
            'number' => $this->faker->numberBetween(1, 10),
        ];
    }
}