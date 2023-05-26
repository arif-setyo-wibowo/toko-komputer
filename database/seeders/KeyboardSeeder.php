<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('keyboards')->insert(
            [
                ['keyboardId' => '9941edda-3e30-46ed-9645-2914eb69ad80',
                'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
                'keyboardName' => 'Keyboard',
                'keyboardType' => 'Mechanical',
                'keyboardSize' => '60',
                'keyboardSwitch' => 'Red',
                'keyboardLayout' => '-',
                'keyboardConnection' => 'Wireless',
                'keyboardFeature' => 'Fitur Pilihan',
                'keyboardWarranty' => '3 Tahun',
                'keyboardPrice' => '750000',
                'keyboardStock' => '10',
                'keyboardImage' => 'Sh5ULIp1DPde1CgwxJmy.jpg',
                'keyboardDescription' => 'Keyboard Baik',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
    }
}
