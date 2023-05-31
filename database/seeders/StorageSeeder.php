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
        ('99441faf-18f4-419b-991a-c02e3e4818a9', '9943b588-e5d3-4264-9b0a-74b2717455a7', 'SSD Seagate 128GB RESMI 3 TAHUN', 'SSD', '128 GB', '550', '570', '200', '2.5inch', '3 Tahun', '118000', '100', '9At0DEiziyK7xqMMPG7H.png', '2023-05-27 09:11:23', '2023-05-27 09:11:23')";
    
        DB::statement($query);
    }
}