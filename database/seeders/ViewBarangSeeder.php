<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ViewBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "
        CREATE VIEW products AS
        SELECT 'computer_cases' AS source_table, caseId AS productId, caseName AS productName, casePrice AS productPrice
        FROM computer_cases
        UNION ALL
        SELECT 'storages' AS source_table, storageId AS productId, storageName AS productName, storagePrice AS productPrice
        FROM storages
        UNION ALL
        SELECT 'earphones' AS source_table, earphoneId AS productId, earphoneName AS productName, earPrice AS productPrice
        FROM earphones
        UNION ALL
        SELECT 'graphic_cards' AS source_table, gpuId AS productId, gpuName AS productName, gpuPrice AS productPrice
        FROM graphic_cards
        UNION ALL
        SELECT 'keyboards' AS source_table, keyboardId AS productId, keyboardName AS productName, keyboardPrice AS productPrice
        FROM keyboards
        UNION ALL
        SELECT 'memories' AS source_table, memoryId AS productId, memoryName AS productName, memoryPrice AS productPrice
        FROM memories
        UNION ALL
        SELECT 'microphones' AS source_table, micId AS productId, micName AS productName, micPrice AS productPrice
        FROM microphones
        UNION ALL
        SELECT 'monitors' AS source_table, monitorId AS productId, monitorName AS productName, monitorPrice AS productPrice
        FROM monitors
        UNION ALL
        SELECT 'motherboards' AS source_table, moboId AS productId, moboName AS productName, moboPrice AS productPrice
        FROM motherboards
        UNION ALL
        SELECT 'mouse' AS source_table, mouseId AS productId, mouseName AS productName, mousePrice AS productPrice
        FROM mouse
        UNION ALL
        SELECT 'power_supplies' AS source_table, psuId AS productId, psuName AS productName, psuPrice AS productPrice
        FROM power_supplies
        UNION ALL
        SELECT 'processors' AS source_table, processorId AS productId, processorName AS productName, processorPrice AS productPrice
        FROM processors
        UNION ALL
        SELECT 'storages' AS source_table, storageId AS productId, storageName AS productName, storagePrice AS productPrice
        FROM storages
        ";

        DB::statement('DROP VIEW IF EXISTS products');
        DB::statement($query);
        
    }
}