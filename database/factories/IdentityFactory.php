<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Identity>
 */
class IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shopName' => 'Toko Komputer',
            'shopAddress' => 'Jln. Toko Komputer',
            'shopPhoneNumber' => '081245782932',
            'shopEmail' => 'tokokomputer@gmail.com',
            'shopLogo' => 'XZ8C85604vv9fdG5JhPE.png'
            
        ];
    }
}
