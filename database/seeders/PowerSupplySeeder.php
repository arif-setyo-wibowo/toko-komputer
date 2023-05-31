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
        ('99442235-69b4-404a-b27f-17f2d2bc99a8', '9943b59f-0ac2-48ea-aac9-054cf2d52185', 'Power Supply Varro 500 W', '500', '80 PLUS Bronze', 'Hemat Daya', '1', 'Corsair RMx Series', 'ATX 24-Pin', '1 Bulan', '500000', '100', 'OoMxngEetguJR4qQa61Y.png', '2023-05-27 09:18:27', '2023-05-27 09:18:27')";
        
        DB::statement($query);
    }
}