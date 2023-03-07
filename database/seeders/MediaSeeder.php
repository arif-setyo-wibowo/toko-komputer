<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert(
            [
                [
                    'mediaId' => '90eafac2-1978-4bd9-95eb-1fb180062b30',
                    'mediaName' => 'Facebook',
                    'medialink' => 'https://www.facebook.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => '0b27353e-e028-4b6c-b0d8-da91b0a9c7b4',
                    'mediaName' => 'Twitter',
                    'medialink' => 'https://www.twitter.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => '9b22cd7f-fbf7-4945-9135-dca3531c5177',
                    'mediaName' => 'Instagram',
                    'medialink' => 'https://www.instagram.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => '6bd749cf-5d05-4372-81ba-fe0f80abbecb',
                    'mediaName' => 'Tiktok',
                    'medialink' => 'https://www.tiktok.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => '1d993588-647c-4928-9f4f-a3adcdcbbb02',
                    'mediaName' => 'Shopee',
                    'medialink' => 'https://www.shopee.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
