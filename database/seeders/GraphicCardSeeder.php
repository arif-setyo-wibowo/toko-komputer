<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraphicCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `graphic_cards` (`gpuId`, `brandId`, `gpuName`, `gpuInterface`, `gpuBaseClock`, `gpuBoostClock`, `gpuMemoryClockSpeed`, `gpuMemorySize`, `gpuMemoryInterface`, `gpuMemoryType`, `gpuFeature`, `gpuPowerReq`, `gpuCaseSupport`, `gpuWarranty`, `gpuPrice`, `gpuStock`, `gpuImage`, `created_at`, `updated_at`) VALUES
        ('99441cc5-f2be-4372-8e38-6d59d893c58c', '9943b639-9eac-4992-b7e0-b633c9395c69', 'NVIDIA RTX A2000 6GB miniDP*4 Graphics card', 'VGA', '50', '50', '50', '2', 'VGA', 'DDR 4', 'Agar Lancar', '10', 'Micro-ATX', '1 Tahun', '5941500', '2000', 'UVTvjDgtVYttwgcL0EWP.png', '2023-05-27 09:03:15', '2023-05-27 09:03:15')";
        
        DB::statement($query);
    }
}