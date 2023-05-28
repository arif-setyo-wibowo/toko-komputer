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
        $query = "INSERT INTO `computer_cases` (`caseId`, `brandId`, `caseName`, `caseType`, `caseFanSlot`, `caseDescription`, `caseWarranty`, `casePrice`, `caseStock`, `caseImage`, `created_at`, `updated_at`) VALUES
        ('99442466-84be-4c48-b924-3dd6cec308c5', '9943b639-9eac-4992-b7e0-b633c9395c69', 'CASING PC MINI MICRO ATX PSU 500W CASING KOMPUTER STANDART - M21', 'Mini-ITX', '4', 'Casing PC Mini Micro ATX PSU 500W M21 adalah casing komputer standar dengan ukuran mini yang dirancang untuk mendukung motherboard dengan faktor bentuk Micro ATX.', '1 Tahun', '25000', '1000', 'N1QnrtkJVzj5TKbS25gc.png', '2023-05-27 09:24:35', '2023-05-27 09:24:35')";

        DB::statement($query);
    }
}