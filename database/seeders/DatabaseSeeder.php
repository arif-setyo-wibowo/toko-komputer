<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Earphone;
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
            MediaSeeder::class,
            BrandSeeder::class,
            EmployeeSeeder::class,
            MemorySeeder::class,
            SocketSeeder::class,
            CaseSeeder::class,
            MotherboardSeeder::class,
            StorageSeeder::class,
            PowerSupplySeeder::class,
            GraphicCardSeeder::class,
            ProcessorSeeder::class,
            KeyboardSeeder::class,
            CoolerSeeder::class,
            UserSeeder::class,
            ViewBarangSeeder::class,
            MonitorSeeder::class,
            MouseSeeder::class,
            EarphoneSeeder::class
            
        ]);
    }
}