<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert(
            [
                [
                    'customerId' => 'c7284829-dbd8-45b4-a79c-e137ea0dab02',
                    'customerName' => 'Okky Firmansyah',
                    'customerEmail' => 'okky@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => '07024716-13f3-4fa1-96ab-d1f31460395c',
                    'customerName' => 'Bowo Setyo',
                    'customerEmail' => 'bowo@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => 'cc2faacc-1466-405f-8ad4-c7cfb6dfc4a1',
                    'customerName' => 'Egio Fanny',
                    'customerEmail' => 'egio@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => '5bac5b83-df36-40af-b222-b74b1c074944',
                    'customerName' => 'Rhino Rino',
                    'customerEmail' => 'rhino@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => '5cd4a2e4-82b7-44ab-87c7-fb65570c3e93',
                    'customerName' => 'Bayu Nashhruallah',
                    'customerEmail' => 'bayu@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
