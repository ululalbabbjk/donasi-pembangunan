<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    public function validasidonasi(){
        return $this->hasOne(ValidasiDonasi::class,'id');
    }

    public function balasanpesan(){
        return $this->hasOne(BalasanPesan::class,'id');
    }
}
