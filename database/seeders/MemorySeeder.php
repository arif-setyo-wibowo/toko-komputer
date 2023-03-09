<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('memories')->insert(
            [
                [
                    'memoryId' => 'c728ba88-8856-487d-9d6c-7ce344422595',
                    'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
                    'memoryName' => 'Ram Laptop Asus Ddr4 4GB 8GB 16GB PC19200 2400Mhz V-GeN Sodimm Rescue',
                    'memoryType' => 'DDR4',
                    'memorySpeed' => '2133MHz',
                    'memoryCapacity' => '4GB',
                    'memoryCasLatency' => 'CL15',
                    'memoryVoltage' => '1.2',
                    'memoryWarranty' => 'Lifetime Warranty one to one replacement',
                    'memoryPrice' => '240000',
                    'memoryStock' => '10',
                    'memoryImage' => 'default.jpeg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'memoryId' => 'f10b8028-94fb-4a79-a262-782a1e252295',
                    'brandId' => '98a3b718-bcb2-4778-897d-f7caa4f4f1d6',
                    'memoryName' => 'MEMORY RAM Seagate 4GB DDR3 PC12800 LONGDIM/RAM PC/MEMORY KOMPUTER/MEMORY PC',
                    'memoryType' => 'DDR3',
                    'memorySpeed' => '2200MHz',
                    'memoryCapacity' => '8GB',
                    'memoryCasLatency' => 'CL17',
                    'memoryVoltage' => '1.2',
                    'memoryWarranty' => 'Lifetime Warranty one to one replacement',
                    'memoryPrice' => '350000',
                    'memoryStock' => '10',
                    'memoryImage' => 'default.jpeg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'memoryId' => '529fc712-3a6e-4ec1-9406-d0fc485d37f3',
                    'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
                    'memoryName' => 'Asus DDR3L 4GB 8GB 12800 / 1600MHz LAPTOP / NB SODIMM PC3L-12800S 1333MHZ PC10600ORIGINAL',
                    'memoryType' => 'DDR5',
                    'memorySpeed' => '2200MHz',
                    'memoryCapacity' => '2GB',
                    'memoryCasLatency' => 'CL17',
                    'memoryVoltage' => '1.2',
                    'memoryWarranty' => 'Lifetime Warranty one to one replacement',
                    'memoryPrice' => '400000',
                    'memoryStock' => '10',
                    'memoryImage' => 'default.jpeg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
