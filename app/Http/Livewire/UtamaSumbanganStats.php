<?php

namespace App\Http\Livewire;

use App\Models\Donatur;
use Livewire\Component;

class UtamaSumbanganStats extends Component
{
    public $totalSumbangan, $jumlahOrang;

    public function render()
    {
        $this->totalSumbangan = Donatur::sum('jumlah');
        $this->jumlahOrang = Donatur::count();
        return view('livewire.utama-sumbangan-stats');
    }
}
