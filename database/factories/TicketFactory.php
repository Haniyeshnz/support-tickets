<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\user;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => user::first(),
            'title' => 'ticket' . rand(1, 999),
            'description' => fake()->text(),
            'priority' => 'low',
            'category_id' => rand(1, 3),
            'label_id' => rand(1, 3),
        ];
    }
}
