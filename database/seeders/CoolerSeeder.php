<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoolerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `coolers` (`coolerId`, `brandId`, `coolerType`, `coolerCaseType`, `coolerSocket`, `coolerName`, `coolerRpm`, `coolerPrice`, `coolerStock`, `coolerDescription`, `coolerWarranty`, `coolerImage`, `created_at`, `updated_at`) VALUES
        ('9944273d-a6f6-447d-9800-cbde3c334233', '9943b59f-0ac2-48ea-aac9-054cf2d52185', 'Fan', 'Micro-ATX', 'Any', 'PCCOOLER / PC COOLER PALADIN EX400 RAINBOW CPU COOLER - 4 Heat Pipes', '800 - 1800', '250000', '100', 'PCCOOLER / PC COOLER PALADIN EX400 RAINBOW CPU COOLER - 4 Heat Pipes adalah sebuah CPU cooler yang dirancang untuk menjaga suhu optimal dari prosesor pada komputer Anda. Dengan menggunakan 4 heat pipes, CPU cooler ini mampu efektif menghilangkan panas yang dihasilkan oleh prosesor saat bekerja dengan intensitas tinggi.\r\n\r\nDesain CPU cooler ini menarik perhatian dengan pencahayaan Rainbow yang dapat memberikan tampilan yang menarik di dalam casing komputer Anda. Dengan pencahayaan yang dapat disesuaikan, Anda dapat menciptakan efek pencahayaan yang menarik dan sesuai dengan preferensi Anda.\r\n\r\nPaladin EX400 menggunakan sistem pendinginan berkecepatan tinggi dengan kipas 120mm yang efisien dan bertenaga tinggi. Kipas ini mampu menghasilkan aliran udara yang kuat dan menyejukkan prosesor dengan baik.', '1 Tahun', '9E7AZOBzTNGXH5RlMslF.png', '2023-05-27 09:32:31', '2023-05-27 09:32:31')";
        DB::statement($query);
    }
}