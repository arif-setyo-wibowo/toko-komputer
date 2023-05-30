<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `monitors` (`monitorId`, `brandId`, `monitorName`, `monitorResolution`, `monitorSize`, `monitorPanel`, `monitorRefreshRate`, `monitorResponseTime`, `monitorGamut`, `monitorPort`, `monitorDescription`, `monitorWarranty`, `monitorPrice`, `monitorStock`, `monitorImage`, `created_at`, `updated_at`) VALUES
        ('994a8bd9-f14a-4c42-9c85-68947b26f618', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'ASUS TUF Gaming VG259QM 25\" LED', '1920x1080', '24.5 Inch', 'IPS', '280Hz', '1ms (GTG, Ave.)', '-', '2 HDMI, DisplayPort', '-	Incredibly Fast 280 Hz Refresh Rate\r\n-	Fast IPS Display−1ms (GTG) Response Time\r\n-	Certified NVIDIA G−SYNC Compatible\r\n-	EXTREME LOW MOTION BLUR SYNC\r\n-	HDR\r\n-	In−game enhancements\r\n-	Physical design', '3 Tahun', '4507000', '14', '6ggp8RJXsTaNLqEW4anZ.jpg', '2023-05-30 13:48:49', '2023-05-30 13:48:49');
        ";

        
        DB::statement($query);
    }
}
