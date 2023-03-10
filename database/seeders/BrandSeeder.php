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
        DB::table('brands')->insert(
            [
                [
                    'brandId' => '98a3b6dd-1320-44f6-9cca-44b0b2675e36',
                    'brandName' => 'Team Elite',
                    'brandLogo' => 'dIDG1DgTp0RyVvmkk3NX.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
                    'brandName' => 'Asus',
                    'brandLogo' => 'wQoLTFTuqNsni2mAlnaa.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'brandId' => '98a3b718-bcb2-4778-897d-f7caa4f4f1d6',
                    'brandName' => 'Seagate',
                    'brandLogo' => 'lYcDFJCpZ3I9hBZjg0VI.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]  
            ]
        );
    }
}
