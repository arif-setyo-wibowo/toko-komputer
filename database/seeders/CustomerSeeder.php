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
                    'customerId' => 'cust001',
                    'customerName' => 'Okky Firmansyah',
                    'customerEmail' => 'okky@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => 'cust002',
                    'customerName' => 'Bowo Setyo',
                    'customerEmail' => 'bowo@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => 'cust003',
                    'customerName' => 'Egio Fanny',
                    'customerEmail' => 'egio@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => 'cust004',
                    'customerName' => 'Rhino Rino',
                    'customerEmail' => 'rhino@gmail.com',
                    'customerPassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'customerId' => 'cust005',
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
