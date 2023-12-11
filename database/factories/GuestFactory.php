<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    protected $model = Guest::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'tel' => fake()->phoneNumber(),
            'address' => fake()->address(),
            // 'created_at' => date('Y-m-d H:i:s'),
            // 'updated_at' => date('Y-m-d H:i:s'),
        ];

    }
}
