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
        ('99441e01-cad8-4b0a-b518-d9c7cbc2ba82', '9943b548-0331-4189-84a7-25e1da6e7417', 'Ram PC Kingston Fury Beast DDR4 32GB – 3200MHz', 'DDR4', '1000', '32GB (2X16GB)', '2000', '1.2V', '1 Bulan', '1279000', '1000', 'GQhBxbomQ2v9MloyZM4k.png', '2023-05-27 02:06:42', '2023-05-27 02:06:42'),
        ('994dab83-9b34-43b7-a5df-4f804a824a1c', '9943b548-0331-4189-84a7-25e1da6e7417', 'Ram T-Create Classic DDR4 3200MHz Dual 2x8 GB', 'DDR4', '3200', '16GB (2X8GB)', '19', '5', '2', '1500000', '5', 'yV4JI7yqvtLUJy6VNudi.jpg', '2023-06-01 03:04:50', '2023-06-01 03:04:50'),
        ('994dac03-3b8e-4e4c-974a-f1d3d2ee160b', '994c7643-49b0-41ed-a019-4a3e42b3f31b', 'Ram Corsair Vengeance 8GB DDR4 2666MHz', 'DDR4', '2666', '8GB', '19', '3', '2', '700000', '5', 'bowqXkT09p2j4wGZJ42k.jpg', '2023-06-01 03:06:14', '2023-06-01 03:06:14');";

        DB::statement($query);
    }
}