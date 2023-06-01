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
        ('99441cc5-f2be-4372-8e38-6d59d893c58c', '9943b639-9eac-4992-b7e0-b633c9395c69', 'NVIDIA RTX A2000 6GB miniDP*4 Graphics card', 'VGA', '50', '50', '50', '2', 'VGA', 'DDR 4', 'Agar Lancar', '10', 'Micro-ATX', '1 Tahun', '5941500', '2000', 'UVTvjDgtVYttwgcL0EWP.png', '2023-05-27 02:03:15', '2023-05-27 02:03:15'),
        ('994da951-f326-4e80-aeab-db880fdc6514', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'ASUS RX560 Strix Gaming', '1', '3', '2', '2600', '4', '1', 'GDDRX6', '1', '200', 'Micro-ATX', '2', '1600000', '3', 'm6JstCpQjiohs9WhsHEu.jpg', '2023-06-01 02:58:42', '2023-06-01 02:58:42');";
        
        DB::statement($query);
    }
}