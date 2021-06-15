<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rekening extends Controller
{
    public function index(){
        $rekenings = \App\Models\Rekening::all();
        return view('dashboard.rekening.index',compact('rekenings'));
    }
}
