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
        DB::table('coolers')->insert(
            [
                ['coolerId' => '9941eb26-4074-45c7-9cb7-500379343f67',
                'brandId' => '98a3b6dd-1320-44f6-9cca-44b0b2675e36',
                'coolerType' => 'Headsink',
                'coolerCaseType' => 'Micro-ATX',
                'coolerSocket' => 'socket A',
                'coolerName' => 'Cooler Bagus Banget',
                'coolerRpm' => '2500 rpm',
                'coolerPrice' => '1500000',
                'coolerStock' => '12',
                'coolerDescription' => 'Cooler Bagus',
                'coolerWarranty' => '3 tahun',
                'coolerImage' => 'JZx9b7wDl6zUwvY3NsBW.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
    }
}
