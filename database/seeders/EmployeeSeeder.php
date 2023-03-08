<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert(
            [
                [
                    'employeeId' => 'e2de628c-13aa-4d22-a3b4-65868134482b',
                    'employeeName' => 'Okky',
                    'employeeEmail' => 'okky@gmail.com',
                    'employeeRole' => 'Admin',
                    'employeePassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'employeeId' => 'ac5d2a3f-263b-4edc-9777-b84d80eefcbf',
                    'employeeName' => 'Bowo',
                    'employeeEmail' => 'manager@gmail.com',
                    'employeeRole' => 'Manager',
                    'employeePassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'employeeId' => '0195466d-44a2-45e4-9b7f-40e62da7efcb',
                    'employeeName' => 'Egio',
                    'employeeEmail' => 'admin@gmail.com',
                    'employeeRole' => 'Admin',
                    'employeePassword' => 'c821adbe2db2d35a30551480105cb919',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
