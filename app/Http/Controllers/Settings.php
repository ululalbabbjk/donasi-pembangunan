<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Settings extends Controller
{
    public function index()
    {
        $settings = \App\Models\Settings::all()->first;
        $target = $settings->target->target;
        return view('settings.index',compact('target'));
    }

    public function inputTarget(Request $req){
        $target = $req->post('target');
        $setting = \App\Models\Settings::first();
        $setting->target = $target;
        $setting->save();
        return redirect('settings')->with('pesan','Pengaturan berhasil disimpan!');
    }
}
