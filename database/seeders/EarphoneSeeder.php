<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EarphoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `earphones` (`earphoneId`, `brandId`, `earphoneName`, `earphoneType`, `earphoneSensitivity`, `earphoneImpedance`, `earphoneDriver`, `earphoneConnection`, `earphoneSoundSig`, `earphoneHaveMic`, `earphoneDescription`, `earphoneWarranty`, `earphonePrice`, `earphoneStock`, `earphoneImage`, `created_at`, `updated_at`) VALUES
        ('994c7219-5c27-40b4-919f-50d6538dd29a', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'Asus ROG Cetra True Wireless Gaming with Low-Latency / TWS Gaming', 'TWS', '-', '-', 'Neodymium magnet', 'Wireless/Bluetooth', '-', 'Ya', 'Tws Bagus', '1 tahun', '1201000', '12', 'ajZfFwFUugDVl9HXOC6R.jpg', '2023-05-31 05:28:28', '2023-05-31 05:28:28'),
        ('994db1a8-e187-4947-a7ef-4c67066bc98e', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'IEM Moondrop Starfield', 'IEM', '5', '3', '3', 'APTX', '5', 'Ya', 'IEM Moondrop Starfield', '2', '2400000', '5', 'y4ih4BQE2v9rQVw1OZcp.png', '2023-06-01 03:22:01', '2023-06-01 03:22:01');
        ";
        
        DB::statement($query);
    }
}
