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
                    'mediaId' => 'media001',
                    'mediaName' => 'Facebook',
                    'medialink' => 'https://www.facebook.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => 'media002',
                    'mediaName' => 'Twitter',
                    'medialink' => 'https://www.twitter.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => 'media003',
                    'mediaName' => 'Instagram',
                    'medialink' => 'https://www.instagram.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => 'media004',
                    'mediaName' => 'Tiktok',
                    'medialink' => 'https://www.tiktok.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'mediaId' => 'media005',
                    'mediaName' => 'Shopee',
                    'medialink' => 'https://www.shopee.com',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
