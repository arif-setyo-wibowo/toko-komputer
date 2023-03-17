<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotherboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('motherboards')->insert([
            'moboId'=>'98b4a1ff-982d-44ab-be66-8e40d434dd2e',
            'processorSocketId'=>'14f7cb0d-4ebe-4253-9b87-e824322fcb1c',
            'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
            'moboName' => 'ASRock X570 Taichi Razer Edition',
            'moboChipset' => 'AMD X570',
            'moboPort' => 'USB C x 1, USB 2.0 x 1, USB 3.2 x 2, 0, D-sub x 2, S/PDIF x 1, Ethernet x 1, 0, 0, Serial x 1, Audio x 3, Hdmi x 1, 0, eSata x 2, 0',
            'moboStorageSata' => 'SATA x 3',
            'moboStorageM2' => 'M.2 x 5',
            'moboFormFactor' => 'eATX',
            'moboMemoryType' =>'DDR4',
            'moboMemoryCap' =>'up to 64 GB',
            'moboMemorySlot'=>'1',
            'moboDescription'=>'Lah iya tuh bang',
            'moboWarranty'=>'3 Year(s)',
            'moboPrice'=>'7800000',
            'moboStock'=>'21',
            'moboImage'=>'Zq8QHshFeTIfh7zZmlDj.jpg',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
