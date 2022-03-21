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
                'fotoProfil' => 'https://kendarikota.go.id/assets/img/pejabat/istaman-sip-mm.png',
                'namaPegawai' => 'Rozak',
                'jenisKelamin' => 'Laki-Laki',
                'jabatan' => 'Manajer Toko',
                'alamat' => 'Mojokerto',
                'noTelp' => '081223445501'
            ],
            [
                'fotoProfil' => 'https://kendarikota.go.id/assets/img/pejabat/istaman-sip-mm.png',
                'namaPegawai' => 'Zaki',
                'jenisKelamin' => 'Laki-Laki',
                'jabatan' => 'Kasir',
                'alamat' => 'Malang',
                'noTelp' => '081332544000'
            ],
            [
                'fotoProfil' => 'https://keperawatan.poltekkesgorontalo.ac.id/wp-content/uploads/2020/12/2.jpg',
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
