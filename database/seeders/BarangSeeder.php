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
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/8/2197e110-ccc9-461f-8880-89ac886d4d01.png',
                'namalaptop' => 'Lenovo Legion 5',
                'spesifikasi' => 'RTX™ 3050 - 165Hz Ryzen 5 5600 16GB 512ssd - W10',
                'harga' => '16699000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/8/f5d80a7e-1cba-4bab-b468-3f046dbb93a2.png',
                'namalaptop' => 'Acer Nitro 5',
                'spesifikasi' => 'GeForce RTX™ 3050 - 144Hz i5 11400 8GB 512ssd',
                'harga' => '13299000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/15/1b303828-aa2d-442f-b67a-0b9ead6d6734.jpg',
                'namalaptop' => 'ACER PREDATOR HELIOS 300 PH315',
                'spesifikasi' => 'GeForce RTX™ 3070 - i9-11900H 16GB - unit',
                'harga' => '27599000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/11/1972860f-b50a-4017-ab35-dfc158101fcb.jpg',
                'namalaptop' => 'ASUS VIVOBOOK PRO 14 M3401QC',
                'spesifikasi' => 'GeForce RTX™ 3050 - Ryzen 7 5800H 8GB - BLUE',
                'harga' => '15799000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/11/16200c70-4966-4b17-a341-ab86e3d56f71.jpg',
                'namalaptop' => 'ASUS ROG STRIX G513QE ',
                'spesifikasi' => 'GeForce RTX™ 3050Ti - Ryzen 7 5800 16GB 512ssd',
                'harga' => '18799000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/9/11/131da230-9658-4907-8d6e-73333655623e.png',
                'namalaptop' => 'ASUS ROG Zephyrus G14',
                'spesifikasi' => 'GeForce RTX™ 3050Ti - Ryzen 9 5900 SSD1TB',
                'harga' => '27499000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/9/4/d64843dc-ca50-43d2-ae74-d5a943222a38.png',
                'namalaptop' => 'ASUS ROG STRIX G713IE',
                'spesifikasi' => 'GeForce® RTX3050Ti - Ryzen 7 4800 8GB 512ssd - W10+8GB',
                'harga' => '18899000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/9/b9307cdc-f80d-44ac-8bfc-e32cba0bff19.jpg',
                'namalaptop' => 'MSI STEALTH 15M',
                'spesifikasi' => 'GeForce RTX™ 3060 - i7 11375H 16GB 512SSD -A11UEK - UNIT WHITE',
                'harga' => '12899000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/11/9c797700-2875-4779-8c85-119488d0903e.jpg',
                'namalaptop' => 'ASUS TUF Dash F15 FX516PM',
                'spesifikasi' => 'GeForce RTX™ 3060 - i7 11370 8GB 512ssd - Grey, 16gb',
                'harga' => '19299000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/11/a4e6cd41-eae3-43a1-a139-17f4b73b5eaf.jpg',
                'namalaptop' => 'ASUS ROG Zephyrus M16 GU603HM',
                'spesifikasi' => 'GeForce RTX™ 3060 - i9 11900 16GB 1TB - UNIT',
                'harga' => '33499000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2022/3/11/6f4f626b-4b53-4bb2-ada0-6de2c453da1e.jpg',
                'namalaptop' => 'ASUS ROG STRIX G733QR',
                'spesifikasi' => 'GeForce RTX™ 3070 - 300Hz R9-5900HX 32GB 1TB',
                'harga' => '38999000'
            ],
            [
                'gambar' => 'https://images.tokopedia.net/img/cache/900/VqbcmM/2021/6/15/60ce8e00-d095-497f-b652-b54b2a506fbc.png',
                'namalaptop' => 'ASUS ROG Zephyrus G14 GA401QE',
                'spesifikasi' => 'GeForce RTX™3050Ti - Ryzen 7 5800 16GB - Grey',
                'harga' => '22699000'
            ],
        ];
        DB::table('barangs')->insert($data);
    }
}
