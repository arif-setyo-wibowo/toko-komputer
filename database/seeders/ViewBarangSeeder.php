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
            SELECT 
                'computer_cases' AS source_table,
                'Casing' AS Categories,
                caseId AS productId, 
                caseName AS productName, 
                casePrice AS productPrice, 
                caseImage AS productImage 
            FROM 
                computer_cases 
            UNION ALL 
            SELECT 
                'storages' AS source_table, 
                'Storage' AS Categories,
                storageId AS productId, 
                storageName AS productName, 
                storagePrice AS productPrice, 
                storageImage AS productImage 
            FROM 
                storages 
            UNION ALL 
            SELECT 
                'earphones' AS source_table, 
                'Earphone' AS Categories,
                earphoneId AS productId, 
                earphoneName AS productName, 
                earphonePrice AS productPrice, 
                earphoneImage AS productImage 
            FROM 
                earphones 
            UNION ALL 
            SELECT 
                'graphic_cards' AS source_table,
                'Graphic Card' AS Categories,
                gpuId AS productId, 
                gpuName AS productName, 
                gpuPrice AS productPrice, 
                gpuImage AS productImage 
            FROM 
                graphic_cards 
            UNION ALL 
            SELECT 
                'keyboards' AS source_table, 
                'Keyboard' AS Categories,
                keyboardId AS productId, 
                keyboardName AS productName, 
                keyboardPrice AS productPrice, 
                keyboardImage AS productImage 
            FROM 
                keyboards 
            UNION ALL 
            SELECT 
                'memories' AS source_table, 
                'Memory' AS Categories,
                memoryId AS productId, 
                memoryName AS productName, 
                memoryPrice AS productPrice, 
                memoryImage AS productImage 
            FROM 
                memories 
            UNION ALL 
            SELECT 
                'monitors' AS source_table, 
                'Monitor' AS Categories,
                monitorId AS productId, 
                monitorName AS productName, 
                monitorPrice AS productPrice, 
                monitorImage AS productImage 
            FROM 
                monitors 
            UNION ALL 
            SELECT 
                'motherboards' AS source_table, 
                'Motherboard' AS Categories,
                moboId AS productId, 
                moboName AS productName, 
                moboPrice AS productPrice, 
                moboImage AS productImage 
            FROM 
                motherboards 
            UNION ALL 
            SELECT 
                'mouse' AS source_table, 
                'Mouse' AS Categories,
                mouseId AS productId, 
                mouseName AS productName, 
                mousePrice AS productPrice,
                mouseImage AS productImage 
            FROM 
                mouse 
            UNION ALL 
            SELECT 
                'power_supplies' AS source_table, 
                'Power Supply' AS Categories,
                psuId AS productId, 
                psuName AS productName, 
                psuPrice AS productPrice,
                psuImage AS productImage 
            FROM 
                power_supplies 
            UNION ALL 
            SELECT 
                'processors' AS source_table, 
                'Processor' AS Categories,
                processorId AS productId, 
                processorName AS productName, 
                processorPrice AS productPrice,
                processorImage AS productImage 
            FROM 
                processors
            UNION ALL 
            SELECT 
                'coolers' AS source_table, 
                'Cooler' AS Categories,
                coolerId AS productId, 
                coolerName AS productName, 
                coolerPrice AS productPrice,
                coolerImage AS productImage 
            FROM 
            coolers;
            ";

        DB::statement('DROP VIEW IF EXISTS products');
        DB::statement($query);
        
    }
}