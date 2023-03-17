<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('storages')->insert(
            [
                [
                    'storageId' => '580da2d5-aa70-4764-ae2a-44908ace8716',
                    'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
                    'storageName' => 'KLEVV SSD CRAS C920',
                    'storageType' => 'SSD',
                    'storageSize' => '1 TB',
                    'storageReadSpeed' => '20',
                    'storageWriteSpeed' => '30',
                    'storageRpm' => '40',
                    'storageDimension' => 'M.2',
                    'storageWarranty' => '2 Tahun',
                    'storagePrice' => '240000',
                    'storageStock' => '10',
                    'storageImage' => 'default.jpeg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'storageId' => '32871309-0d5b-4c44-b804-99216d7ffd5a',
                    'brandId' => '98a3b718-bcb2-4778-897d-f7caa4f4f1d6',
                    'storageName' => 'VGen Hardisk 128GB',
                    'storageType' => 'Harddisk',
                    'storageSize' => '128 GB',
                    'storageReadSpeed' => '90',
                    'storageWriteSpeed' => '95',
                    'storageRpm' => '100',
                    'storageDimension' => 'M.2',
                    'storageWarranty' => '3 Tahun',
                    'storagePrice' => '450000',
                    'storageStock' => '11',
                    'storageImage' => 'default.jpeg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
