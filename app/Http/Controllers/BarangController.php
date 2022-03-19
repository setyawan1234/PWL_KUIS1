<?php

namespace App\Http\Controllers;
use App\Models\barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function barang(){
        $data = barang::all();
            return view ('barang',['barang'=>$data])
            ->with('title','Product');
    }
}
