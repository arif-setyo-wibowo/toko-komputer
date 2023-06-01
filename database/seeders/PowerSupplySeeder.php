<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerSupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `power_supplies` (`psuId`, `brandId`, `psuName`, `psuPower`, `psuCertification`, `psuEfficiency`, `psuCooling`, `psuModular`, `psuConnector`, `psuWarranty`, `psuPrice`, `psuStock`, `psuImage`, `created_at`, `updated_at`) VALUES
        ('99442235-69b4-404a-b27f-17f2d2bc99a8', '9943b59f-0ac2-48ea-aac9-054cf2d52185', 'Power Supply Varro 500 W', '500', '80 PLUS Bronze', 'Hemat Daya', '1', 'Corsair RMx Series', 'ATX 24-Pin', '1 Bulan', '500000', '100', 'OoMxngEetguJR4qQa61Y.png', '2023-05-27 02:18:27', '2023-05-27 02:18:27'),
        ('994dae2d-6c81-4c4d-afb9-3affb6e81eea', '9943b6f1-4f6d-4d8a-b289-8ef29405a07c', 'PSU CoolerMaster MWE 750W', '750', '80 PLUS Bronze', '80', '5', 'yes', '5', '2', '1800000', '1', 'chYLFmMoBJaASqoQZm1q.jpg', '2023-06-01 03:12:17', '2023-06-01 03:14:20'),
        ('994daed2-9524-466a-ac2a-5e5cb9b64442', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'PSU Super Flower Leadex Gold 1000W', '1000', '80 PLUS Gold', '80', '5', '1', '5', '1', '2000000', '5', 'ANTtmbXRIg3sDGhm6sfF.jpg', '2023-06-01 03:14:05', '2023-06-01 03:14:05');";
        
        DB::statement($query);
    }
}