<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `storages` (`storageId`, `brandId`, `storageName`, `storageType`, `storageSize`, `storageReadSpeed`, `storageWriteSpeed`, `storageRpm`, `storageDimension`, `storageWarranty`, `storagePrice`, `storageStock`, `storageImage`, `created_at`, `updated_at`) VALUES
        ('99441faf-18f4-419b-991a-c02e3e4818a9', '9943b588-e5d3-4264-9b0a-74b2717455a7', 'SSD Seagate 128GB RESMI 3 TAHUN', 'SSD', '128 GB', '550', '570', '200', '2.5inch', '3 Tahun', '118000', '100', '9At0DEiziyK7xqMMPG7H.png', '2023-05-27 02:11:23', '2023-05-27 02:11:23'),
        ('994dacd7-3d56-4280-9577-8f3ae4e5ff5e', '9943b548-0331-4189-84a7-25e1da6e7417', 'SSD Team GX2 512GB', 'SSD', '512 GB', '6000', '5000', '0', '2.5', '2', '600000', '5', 'kmpIvKBBPy7HFth3h4Q5.jpg', '2023-06-01 03:08:33', '2023-06-01 03:08:33'),
        ('994dada2-7b1e-4c60-8503-a56f0c9076ef', '9943b588-e5d3-4264-9b0a-74b2717455a7', 'HDD Seagate Barracuda 500GB 3.5\"', 'Harddisk', '500 GB', '400', '200', '7200', '3.5', '2', '300000', '10', 'm5VjP7cU6FTrfzXgSIYx.jpg', '2023-06-01 03:10:46', '2023-06-01 03:10:46');";
    
        DB::statement($query);
    }
}