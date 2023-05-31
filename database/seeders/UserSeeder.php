<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                ['customerId' => '9941f355-3777-49de-a9ad-2bb6c8ee82c0',
                'customerName' => 'ARIF SETYO WIBOWO',
                'customerEmail' => 'arif18.sw@gmail.com',
                'customerPhoneNumber' => '081805404140',
                'customerPassword' => '$2y$10$h7DdbsdDwlLCwKBTM6MXI.xeZBJjpO9wzv4MRkenr5kslasrpO0Fm',
                'customerVerifyKey' => '0B4L6b1s7A35IWGGHxji4JKyQM8PB8xcb1Bsfj5sERX5SPso41aTduDNYqC18Ro8rwWecShLE86KUgYflGPn0JTZ9sgiceEkzm5I',
                'customerVerifyAt' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
    }
}
