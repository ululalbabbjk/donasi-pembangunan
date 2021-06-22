<?php

namespace App\Http\Livewire\Validasi;

use App\Models\Donatur;
use App\Models\ValidasiDonasi;
use Livewire\Component;

class Table extends Component
{
    public $donaturs;
    public function render()
    {
        $this->donaturs = Donatur::whereValidated(false)->get();
        return view('livewire.validasi.table');
    }

    public function hydrate()
    {
        $this->donaturs = Donatur::whereValidated(false)->get();
    }

    public function deny($id)
    {
        $validasi = ValidasiDonasi::whereId($id)->first();
        $validasi->file = null;
        $validasi->save();
        $this->alert(
            'success',
            'Donasi berhasil ditolak!'
        );

    }

    public function accept($id)
    {
        $donatur = Donatur::whereId($id)->first();
        $donatur->validated = true;
        $donatur->save();
        $this->alert(
            'success',
            'Donasi berhasil diterima!'
        );
    }
}
