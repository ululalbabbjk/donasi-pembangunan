<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gambar extends Controller
{
    public function index()
    {
        return view('dashboard.gambar.index');
    }
}
