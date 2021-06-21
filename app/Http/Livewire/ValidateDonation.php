<?php

namespace App\Http\Livewire;

use App\Models\Donatur;
use App\Models\Rekening;
use App\Models\ValidasiDonasi;
use Livewire\Component;

class ValidateDonation extends Component
{
    public $validasi, $rekening,$donatur,$id_donasi;

    public function render()
    {
        $this->validasi = ValidasiDonasi::whereId($this->id_donasi)->first();
        $this->donatur = Donatur::whereId($this->id_donasi)->first();
        $this->rekening = Rekening::whereId($this->validasi->id_rekening)->first();

        return view('livewire.validate-donation');
    }
}
