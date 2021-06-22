<?php

namespace App\Http\Livewire;

use App\Models\Donatur;
use Livewire\Component;

class UtamaSumbanganStats extends Component
{
    public $totalSumbangan, $jumlahOrang;

    public function render()
    {
        $this->totalSumbangan = Donatur::whereValidated(true)->sum('jumlah');
        $this->jumlahOrang = Donatur::whereValidated(true)->count();
        return view('livewire.utama-sumbangan-stats');
    }
}
