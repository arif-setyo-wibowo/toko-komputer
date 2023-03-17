<?php

namespace Database\Seeders;

use App\Models\Customer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            IdentitiesSeeder::class,
            CustomerSeeder::class,
            MediaSeeder::class,
            EmployeeSeeder::class,
            BrandSeeder::class,
            MemorySeeder::class,
            SocketSeeder::class,
            CaseSeeder::class,
            MotherboardSeeder::class,
        ]);
    }
}
