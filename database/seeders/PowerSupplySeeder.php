<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerSupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('power_supplies')->insert([
            'psuId'=>'98b743c8-95dc-4e88-b0b7-17f04987d896',
            'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
            'psuName' => 'SYSTEM POWER U9',
            'psuPower' => '400',
            'psuCertification' => '80 PLUS Bronze',
            'psuEfficiency' => 'Up to 89%',
            'psucooling' => 'Fan',
            'psuModular' => 'No Modular',
            'psuConnector' =>'20+4-Pin 1x (8/4 pins) CPU +12V 2x 4Pin Molex 4x (8/6 pins) PCI-E Power 6x SATA Power',
            'psuWarranty' =>'3 Year(s)',
            'psuPrice'=>'706.000',
            'psuStock'=>'15',
            'psuImage'=>'lT4sBzjEVTW41rGmweZl.png',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
