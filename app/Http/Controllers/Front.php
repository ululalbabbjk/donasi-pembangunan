<?php

namespace App\Http\Controllers;

use App\Models\Donatur;
use Illuminate\Http\Request;

class Front extends Controller
{
    public function galery()
    {
        $gambars = \App\Models\Gambar::all();
        return view('galery',compact('gambars'));
    }

    function index() {
        $donaturs = Donatur::whereValidated(true)->take(12)->get();
        $jumlah = Donatur::whereValidated(true)->sum('jumlah');
        $gambars = \App\Models\Gambar::take(5)->get();
        $t = \App\Models\Settings::whereId(1)->get();
        $target = $t[0]->target;
        return view('welcome',compact('donaturs','jumlah','gambars','target'));
    }

    public function daftardonatur()
    {
        $donaturs = Donatur::whereValidated(true)->get();
        $jumlah = Donatur::whereValidated(true)->count();

        return view('daftardonatur',compact('donaturs','jumlah'));
    }
}
