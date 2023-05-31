<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `memories` (`memoryId`, `brandId`, `memoryName`, `memoryType`, `memorySpeed`, `memoryCapacity`, `memoryCasLatency`, `memoryVoltage`, `memoryWarranty`, `memoryPrice`, `memoryStock`, `memoryImage`, `created_at`, `updated_at`) VALUES
        ('99441e01-cad8-4b0a-b518-d9c7cbc2ba82', '9943b548-0331-4189-84a7-25e1da6e7417', 'Ram PC Kingston Fury Beast DDR4 32GB – 3200MHz', 'DDR4', '1000', '32GB (2X16GB)', '2000', '1.2V', '1 Bulan', '1279000', '1000', 'GQhBxbomQ2v9MloyZM4k.png', '2023-05-27 09:06:42', '2023-05-27 09:06:42')";

        DB::statement($query);
    }
}