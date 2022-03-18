<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'gambar' => 'https://static.bmdstatic.com/pk/product/large/5fcefe99bc9f4.jpg',
                'namalaptop' => 'Asus Legion 5',
                'spesifikasi' => 'AMD Ryzen 7 5800H 16GB RX 6600M 8GB W10 + OHS 15.6" FHD 165Hz',
                'harga' => 'Rp 18.999.999'
            ]
        ];
        DB::table('barangs')->insert($data);
    }
}
