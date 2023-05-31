<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `processors` (`processorId`, `processorSocketId`, `brandId`, `processorName`, `processorGen`, `processorCore`, `processorThread`, `processorBaseSpeed`, `processorBoostSpeed`, `processorCache`, `processorArch`, `processorIgpu`, `processorPower`, `processorHeatsink`, `processorWarranty`, `processorPrice`, `processorStock`, `processorImage`, `created_at`, `updated_at`) VALUES
        ('9943cf7c-07f0-4269-b948-53a3f1e5b6bf', '9943bb7c-f868-4d6f-bed4-0d5eb8ba234d', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'Processor Intel Core I5 12400 Box Alder Lake Socket', '12', '8', '6', '1500', '4.40', '16 MB SmartCache', 'Intel', 'Intel', '25', '1', '1 Tahun', '2885000', '100', 'Sc8NEP0OPnkqAGLDlO5u.png', '2023-05-27 05:27:08', '2023-05-27 05:28:58')";
        DB::statement($query);
    }
}