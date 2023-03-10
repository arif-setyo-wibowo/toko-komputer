<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('processor_sockets')->insert(
            [
                [
                    'processorSocketId' => '5fc9a025-0ac1-42d1-af02-9a3c96a2131a',
                    'processorSocketName' => 'Socket T',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'processorSocketId' => '14f7cb0d-4ebe-4253-9b87-e824322fcb1c',
                    'processorSocketName' => 'Socket H/H1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'processorSocketId' => 'd1da8b40-fd42-420b-9e80-3eeabb004ddd',
                    'processorSocketName' => 'Socket H2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'processorSocketId' => '2cbbd776-5fae-4890-a382-77a990154b83',
                    'processorSocketName' => 'Socket H3',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'processorSocketId' => '4099d71d-e5e5-485a-a387-8dc6d2609e67',
                    'processorSocketName' => 'Socket 423',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]
        );
    }
}
