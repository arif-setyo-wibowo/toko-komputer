<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('computer_cases')->insert(
            [
                [
                    'caseId' => '227bf44d-4620-4864-9d2f-b93e50b42aae',
                    'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
                    'caseName' => 'CASING PC AIGO DLM22 LUXURY WHITE TEMPERED MICRO',
                    'caseType' => 'Mini-ITX',
                    'caseFanSlot' => '2',
                    'caseDescription' => 'Cube Gaming Irvbow ATX Mid Tower PC Casing Komputer merupakan compact mid tower ATX case dengan design modern minimalis, dilengkapi RGB strip tipis di sisi kiri untuk tampilan yang lebih stylish. Sudah dilengkapi side panel tempered glass dan psu cover unik model half cover.',
                    'caseWarranty' => '3 Hari Distributor',
                    'casePrice' => '1200000',
                    'caseStock' => '10',
                    'caseImage' => 'default.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'caseId' => 'dbbf28aa-1527-43ad-a70a-10b4e4895702',
                    'brandId' => '98a3b707-5259-454c-a105-301228011ee5',
                    'caseName' => 'Casing PC Prime-S [S] M-ATX Gaming PC Case Prime S [S]',
                    'caseType' => 'Mini-ITX',
                    'caseFanSlot' => '4',
                    'caseDescription' => 'Cube Gaming Irvbow ATX Mid Tower PC Casing Komputer merupakan compact mid tower ATX case dengan design modern minimalis, dilengkapi RGB strip tipis di sisi kiri untuk tampilan yang lebih stylish. Sudah dilengkapi side panel tempered glass dan psu cover unik model half cover.',
                    'caseWarranty' => '10 Hari',
                    'casePrice' => '355000',
                    'caseStock' => '22',
                    'caseImage' => 'default.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'caseId' => 'b33b65d5-794a-4ceb-868c-129807984b23',
                    'brandId' => '98a3b6dd-1320-44f6-9cca-44b0b2675e36',
                    'caseName' => 'Cube Gaming Irvbow ATX Mid Tower PC Casing Komputer',
                    'caseType' => 'Extended ATX',
                    'caseFanSlot' => '4',
                    'caseDescription' => 'Cube Gaming Irvbow ATX Mid Tower PC Casing Komputer merupakan compact mid tower ATX case dengan design modern minimalis, dilengkapi RGB strip tipis di sisi kiri untuk tampilan yang lebih stylish. Sudah dilengkapi side panel tempered glass dan psu cover unik model half cover.',
                    'caseWarranty' => '1 Tahun',
                    'casePrice' => '500000',
                    'caseStock' => '33',
                    'caseImage' => 'default.png',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
