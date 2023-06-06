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
        ('9943cf7c-07f0-4269-b948-53a3f1e5b6bf', '9943bb7c-f868-4d6f-bed4-0d5eb8ba234d', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'Processor Intel Core I5 12400 Box Alder Lake Socket', '12', '8', '6', '1500', '4.40', '16 MB SmartCache', 'Intel', 'Intel', '25', '1', '1 Tahun', '2885000', '100', 'Sc8NEP0OPnkqAGLDlO5u.png', '2023-05-26 22:27:08', '2023-05-26 22:28:58'),
        ('994da6c4-05c9-4d5e-a9c4-dc9f55f7ee57', '994da269-13e9-4051-bd9a-784050b74fe2', '9943b548-0331-4189-84a7-25e1da6e7417', 'Prosesor Ryzen 3 3200G', '3', '4', '4', '3.3', '3.6', '2', '6nm', '2', '100', '100', '1', '1600000', '12', 'cxkGUMgjghBfhkzdPlOe.jpeg', '2023-06-01 02:51:33', '2023-06-01 02:51:33'),
        ('994da78c-797d-484a-839b-57a5d1d63ca9', '994da269-13e9-4051-bd9a-784050b74fe2', '9943b548-0331-4189-84a7-25e1da6e7417', 'Prosesor Ryzen 3 2200G', '2', '4', '4', '3', '4', '1', '6', 'yes', '100', 'no', '2', '1400000', '5', 'tr4L1PNSxe2hRV55gVFr.jpeg', '2023-06-01 02:53:45', '2023-06-01 02:53:45');";
        DB::statement($query);
    }
}