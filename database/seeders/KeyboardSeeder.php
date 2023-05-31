<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = "INSERT INTO `keyboards` (`keyboardId`, `brandId`, `keyboardName`, `keyboardType`, `keyboardSize`, `keyboardSwitch`, `keyboardLayout`, `keyboardConnection`, `keyboardFeature`, `keyboardWarranty`, `keyboardPrice`, `keyboardStock`, `keyboardImage`, `keyboardDescription`, `created_at`, `updated_at`) VALUES
        ('99442a34-f846-4178-83fd-12fbf1386a01', '9943b578-014c-4ae0-b3d9-ba1b05b99f7d', 'ORIGINAL GRNS 3 Bln Keyboard ASUS A45 A45L A45VJ A45VM A45VS Series', 'Office', 'Full Size', 'Red', 'Full', 'USB', 'Any', '5 Hari', '150000', '100', 'lhUzqTQ8GiTfvT2EviLa.png', 'adalah sebuah keyboard yang dirancang khusus untuk digunakan pada laptop ASUS seri A45, termasuk model A45L, A45VJ, A45VM, dan A45VS. Keyboard ini merupakan keyboard asli yang diproduksi oleh ASUS, sehingga menjamin kualitas dan kompatibilitas yang optimal dengan laptop ASUS seri tersebut.', '2023-05-27 09:40:49', '2023-05-27 09:40:49')";
        DB::statement($query);
    }
}