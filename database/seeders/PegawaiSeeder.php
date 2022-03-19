<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            [
                'namaPegawai' => 'Rozak',
                'jenisKelamin' => 'Laki-Laki',
                'jabatan' => 'Manajer Toko',
                'alamat' => 'Mojokerto',
                'noTelp' => '081223445501'
            ],
            [
                'namaPegawai' => 'Zaki',
                'jenisKelamin' => 'Laki-Laki',
                'jabatan' => 'Kasir',
                'alamat' => 'Malang',
                'noTelp' => '081332544000'
            ],
            [
                'namaPegawai' => 'Rahmawati',
                'jenisKelamin' => 'Perempuan',
                'jabatan' => 'Sales',
                'alamat' => 'Malang',
                'noTelp' => '081443556345'
            ]
        ];
        DB::table('pegawais')->insert($data);
    }
}
