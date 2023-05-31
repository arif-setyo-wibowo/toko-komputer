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
    public function run(): void{
        $query = "INSERT INTO `processor_sockets` (`processorSocketId`, `processorSocketName`, `created_at`, `updated_at`) VALUES
                ('9943bb16-f14e-447b-91d0-f2f915eb61f9', 'Socket T', '2023-05-27 04:30:07', '2023-05-27 04:30:30'),
                ('9943bb44-b42d-4a4c-98a7-199ff31dcf64', 'Socket H/H1', '2023-05-27 04:30:37', '2023-05-27 04:30:37'),
                ('9943bb52-aa06-4c23-aa39-63d088be0977', 'Socket H2', '2023-05-27 04:30:46', '2023-05-27 04:30:46'),
                ('9943bb5e-a345-42e1-8170-8f4e8ac32c55', 'Socket H3', '2023-05-27 04:30:54', '2023-05-27 04:30:54'),
                ('9943bb7c-f868-4d6f-bed4-0d5eb8ba234d', 'Socket 423', '2023-05-27 04:31:13', '2023-05-27 04:31:13'),
                ('9943bb86-e94d-45b1-9139-8914c6d1a029', 'Socket 478', '2023-05-27 04:31:20', '2023-05-27 04:31:20'),
                ('9943bb96-275a-485b-b1fc-4c64fcbe4a0a', 'Socket LGA 775', '2023-05-27 04:31:30', '2023-05-27 04:31:30'),
                ('9943bba2-36be-4150-b22a-612e20fbe84b', 'Socket LGA 1156', '2023-05-27 04:31:38', '2023-05-27 04:31:38'),
                ('9943bbae-638a-49b8-9054-5f5ad25a9cc6', 'Socket LGA 1155', '2023-05-27 04:31:46', '2023-05-27 04:31:46');";
        DB::statement($query);
    }
}