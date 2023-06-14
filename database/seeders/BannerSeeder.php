<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `sliders` (`sliderId`, `sliderImage`, `created_at`, `updated_at`) VALUES
        ('9967ce81-4d48-4756-a478-bd09283672ef', 'jXAc99UNehEfDjVszC8v.png', '2023-06-14 02:54:12', '2023-06-14 03:45:06'),
        ('9967ce8e-3590-4a2f-b74a-ae561bb0d326', 'HkO6X8MenW8wOI3sNoTY.png', '2023-06-14 02:54:21', '2023-06-14 03:45:13'),
        ('9967ce96-8428-4c34-93f9-e9fb5876da52', '0N8vgVQKYHrChL6nKzN4.png', '2023-06-14 02:54:26', '2023-06-14 03:45:19');
        ";
        DB::statement($query);
    }
}
