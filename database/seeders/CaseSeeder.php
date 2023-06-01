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
        ('99442466-84be-4c48-b924-3dd6cec308c5', '9943b639-9eac-4992-b7e0-b633c9395c69', 'CASING PC MINI MICRO ATX PSU 500W CASING KOMPUTER STANDART - M21', 'Mini-ITX', '4', 'Casing PC Mini Micro ATX PSU 500W M21 adalah casing komputer standar dengan ukuran mini yang dirancang untuk mendukung motherboard dengan faktor bentuk Micro ATX.', '1 Tahun', '25000', '1000', 'N1QnrtkJVzj5TKbS25gc.png', '2023-05-27 02:24:35', '2023-05-27 02:24:35'),
        ('994daf75-20b5-4abc-b5a8-e865e9ca7d8f', '9943b872-41a3-482e-9f32-76a4b5830595', 'Casing PC NZXT H5 Flow Black', 'ATX', '8', 'Casing PC NZXT H5 Flow Black', '1', '2100000', '5', 'gsCLmCAILoCLWgFyfkMF.jpg', '2023-06-01 03:15:52', '2023-06-01 03:15:52'),
        ('994dafe2-1db9-4e08-8efe-cbacd7ff9331', '9943b588-e5d3-4264-9b0a-74b2717455a7', 'Casing PC Cube Gaming Finos White', 'ATX', '6', 'Casing PC Cube Gaming Finos White', '2', '500000', '5', 'tjs0DPpy3DHq1yseIdsc.png', '2023-06-01 03:17:03', '2023-06-01 03:17:03');";

        DB::statement($query);
    }
}