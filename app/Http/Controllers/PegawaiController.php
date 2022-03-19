<?php

namespace App\Http\Controllers;

use App\Models\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function pegawai(){
        $data = pegawai::all();
            return view ('pegawai',['pegawai'=>$data])
            ->with('title','empployee');
        }
}
