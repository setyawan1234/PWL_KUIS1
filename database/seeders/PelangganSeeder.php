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
                'jenisKelamin' => 'Laki-Laki',
                'alamat' => 'Mojokerto',
                'email' => 'mahisa123@gmail.com',
                'noTelp' => '085018018018'
            ]
        ];
        DB::table('pelanggans')->insert($data);
    }
}
