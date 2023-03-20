<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GraphicCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('graphic_cards')->insert([
            'gpuId' => '98bbcd64-a87f-413e-8701-945fef24786a',
            'brandId' =>'98a3b707-5259-454c-a105-301228011ee5',
            'gpuName' => 'Radeon RX 6900 XT',
            'gpuInterface' => 'PCI Express 4.0 x16',
            'gpuBaseClock' => '2150 MHz',
            'gpuBoostClock' => '2495 MHz',
            'gpuMemoryClockSpeed' => '16 Gbps',
            'gpuMemorySize' => '16 GB',
            'gpuMemoryInterface' => '256-Bit',
            'gpuMemoryType' => 'GDDR6',
            'gpuFeature' => '2x DisplayPort 1.4, 1 x HDMI 2.1, 1 x USB Type-C',
            'gpuPowerReq' => '500',
            'gpuCaseSupport' => 'ATX ',
            'gpuWarranty' => '3 Year(s)',
            'gpuPrice' => '330825000',
            'gpuStock' => '12',
            'gpuImage' => 'SNkf4Yp09T3TjDBjyz32.png',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s')
        ]);
    }
}
