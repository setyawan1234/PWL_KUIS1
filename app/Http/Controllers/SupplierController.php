<?php

namespace App\Http\Controllers;

use App\Models\supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function supplier(){
        $data = supplier::all();
            return view ('supplier',['supplier'=>$data])
            ->with('title','supplier');
        }
}
