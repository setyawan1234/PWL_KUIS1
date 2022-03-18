<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
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
                'namaPegawai' => 'Mubarok',
                'jenisKelamin' => 'Laki-Laki',
                'produk' => 'Lenovo',
                'noTelp' => '081223445501'
            ]
        ];
        DB::table('suppliers')->insert($data);
    }
}
