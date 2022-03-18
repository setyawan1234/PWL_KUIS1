<?php

namespace App\Http\Controllers;
use App\Models\pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan(){
    $data = pelanggan::all();
        return view ('pelanggan',['pelanggan'=>$data])
        ->with('title','Customer');
    }
}
