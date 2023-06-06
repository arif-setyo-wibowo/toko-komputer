<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `brands` (`brandId`, `brandName`, `brandLogo`, `created_at`, `updated_at`) VALUES
        ('9943b548-0331-4189-84a7-25e1da6e7417', 'Team Elite', 'FfdhJ9ZWKiZ8Zk1DrHrq.png', '2023-05-26 21:40:45', '2023-05-26 21:40:45'),
        ('9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'Asus', 'vU9JIXHnRMIGylX6p9uP.png', '2023-05-26 21:40:45', '2023-05-26 21:40:45'),
        ('9943b588-e5d3-4264-9b0a-74b2717455a7', 'Seagate', 'w6E3JrCMAGFjye5rovU3.png', '2023-05-26 21:40:45', '2023-05-26 21:40:45'),
        ('9943b59f-0ac2-48ea-aac9-054cf2d52185', 'Steelseries', 'gqaZdLtrmwuXUfXa6ApP.png', '2023-05-26 21:40:45', '2023-05-26 21:40:45'),
        ('9943b639-9eac-4992-b7e0-b633c9395c69', 'Lenovo', 'xOVsRFFS0g699YIIlE9V.png', '2023-05-26 21:40:45', '2023-05-26 21:40:45'),
        ('9943b6f1-4f6d-4d8a-b289-8ef29405a07c', 'Toshiba', 'O8BJEpZCMI1M0rwst8gD.png', '2023-05-26 21:40:45', '2023-05-26 21:40:45'),
        ('9943b872-41a3-482e-9f32-76a4b5830595', 'Samsung', 'iZpRl9ruailCNGm8ziVh.png', '2023-05-26 21:40:45', '2023-05-26 21:40:45'),
        ('994c7643-49b0-41ed-a019-4a3e42b3f31b', 'Adata', 'zFdBlgitcoeOyvs7Akw1.png', '2023-05-31 12:40:06', '2023-05-31 12:40:38');
        ";
        DB::statement($query);
    }
}