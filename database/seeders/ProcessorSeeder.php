<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('processors')->insert([
            'processorId' => '98c1f48b-0a6a-4b32-b609-a07be9b2d909',
            'processorSocketId' =>  'd1da8b40-fd42-420b-9e80-3eeabb004ddd',
            'brandId' => '98a3b707-5259-454c-a105-301228011ee5', 
            'processorName' => 'Intel Core i7',
            'processorGen' => '13 th gen',
            'processorCore' => '16 Cores',
            'processorThread' => '24 Threads',
            'processorBaseSpeed' =>  '3.4 GHz',
            'processorBoostSpeed' =>  '5.3 GHz',
            'processorCache' => '30 MB',
            'processorArch' => '10 nm',
            'processorIgpu' => 'Intel UHD Graphics 770',
            'processorPower' => '125',
            'processorHeatsink' => '-',
            'processorWarranty' =>  '3 Year(s)',
            'processorPrice' => '7340000',
            'processorStock' => '15',
            'processorImage' => 'gHFJoeXCuYliRWnSndPF.png',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
