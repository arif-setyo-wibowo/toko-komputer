<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `mouse` (`mouseId`, `brandId`, `mouseName`, `mouseSensor`, `mouseSwitch`, `mouseDpi`, `mouseSpeed`, `mousePollRate`, `mouseConnection`, `mouseGrip`, `mouseDescription`, `mouseWarranty`, `mousePrice`, `mouseStock`, `mouseImage`, `created_at`, `updated_at`) VALUES
        ('994c7541-4ed7-4ec3-993f-c4fb8cec0db0', '994c7643-49b0-41ed-a019-4a3e42b3f31b', 'ADATA XPG INFAREX M20 - GAMING MOUSE - 5000 DPI - OMRON switches 20 million clicks', 'Optik', 'Omron', '400/800/1600/3200/5000 dpi', '-', '-', 'USB', '-', '*Wajib tanyakan stok sebelum order melalui Diskusi/ Chat\r\n*Gambar hanya ilustrasi, versi produk dapat berbeda tergantung kebijakan vendor, namun tidak mengurangi spesifikasi dan fungsi produk', '1 Tahun', '350.000', '12', 'lum9PFHSyLJEVPc38fOy.jpg', '2023-05-31 12:37:17', '2023-05-31 12:42:12');
        ";
        
        DB::statement($query);
    }
}
