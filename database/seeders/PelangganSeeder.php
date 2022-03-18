<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
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
                'nama' => 'Mahisa Budha Nasution',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Mojokerto',
                'email' => 'mahisa123@gmail.com',
                'noTelp' => '085018018018'
            ],
            [
                'nama' => 'Aghisni Fadli Nasution',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Bangil',
                'email' => 'Nasution9098@gmail.com',
                'noTelp' => '085123123123'
            ],
            [
                'nama' => 'Enjel Setia Ningsih',
                'jenisKelamin' => 'https://cdn.pixabay.com/photo/2021/02/12/07/05/woman-6007535_1280.png',
                'alamat' => 'Bandung',
                'email' => 'EnjelNingsih334@gmail.com',
                'noTelp' => '085234234234'
            ],
            [
                'nama' => 'Clara Keyla',
                'jenisKelamin' => 'https://cdn.pixabay.com/photo/2021/02/12/07/05/woman-6007535_1280.png',
                'alamat' => 'Kediri',
                'email' => 'Keyra@gmail.com',
                'noTelp' => '085345345345'
            ],
            [
                'nama' => 'Aurora Neisya',
                'jenisKelamin' => 'https://cdn.pixabay.com/photo/2021/02/12/07/05/woman-6007535_1280.png',
                'alamat' => 'Sidoarjo',
                'email' => 'rasya@gmail.com',
                'noTelp' => '085456456456'
            ],
            [
                'nama' => 'Suci Ardila',
                'jenisKelamin' => 'https://cdn.pixabay.com/photo/2021/02/12/07/05/woman-6007535_1280.png',
                'alamat' => 'Magelang',
                'email' => 'suci@gmail.com',
                'noTelp' => '085567567567'
            ],
            [
                'nama' => 'Imannuel Sondaqh',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Jakarta',
                'email' => 'levi@gmail.com',
                'noTelp' => '085678678678'
            ],
            [
                'nama' => 'Mahardika Bagus',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Kediri',
                'email' => 'bagus@gmail.com',
                'noTelp' => '085789789789'
            ],
            [
                'nama' => 'Brian Farel',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Kediri',
                'email' => 'frrl@gmail.com',
                'noTelp' => '085890890890'
            ],
            [
                'nama' => 'Agatha Raya',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Mojokerto',
                'email' => 'ray@gmail.com',
                'noTelp' => '085112112112'
            ],
            [
                'nama' => 'Rizky Alamsyah',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Pacet',
                'email' => 'rizky@gmail.com',
                'noTelp' => '085122122122'
            ],
            [
                'nama' => 'Anthares Zidni',
                'jenisKelamin' => 'https://cdn.pixabay.com/photo/2021/02/12/07/05/woman-6007535_1280.png',
                'alamat' => 'Bandung',
                'email' => 'zidni@gmail.com',
                'noTelp' => '085133133133'
            ],
            [
                'nama' => 'Salsabila Khares',
                'jenisKelamin' => 'https://cdn.pixabay.com/photo/2021/02/12/07/05/woman-6007535_1280.png',
                'alamat' => 'Lamongan',
                'email' => 'salsa@gmail.com',
                'noTelp' => '085143143143'
            ],
            [
                'nama' => 'Hanifa Nur Rahman',
                'jenisKelamin' => 'https://cdn3.iconfinder.com/data/icons/car-dealership/512/Customer-512.png',
                'alamat' => 'Mojokerto',
                'email' => 'ifa@gmail.com',
                'noTelp' => '085432432432'
            ]
        ];
        DB::table('pelanggans')->insert($data);
    }
}
