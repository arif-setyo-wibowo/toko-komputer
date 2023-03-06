<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'customerId' => 'cust001',
            'customerName' => 'Okky',
            'customerEmail' => 'okky@gmail.com',
            'customerPassword' => 'c821adbe2db2d35a30551480105cb919'
        ];
    }
}
