<?php

namespace App\Http\Livewire\Rekening;

use App\Models\Rekening;
use Livewire\Component;

class Tambah extends Component
{
    public $nama, $jenis="bank",$norek,$atasnama,$saldo=0;

    public function render()
    {
        return view('livewire.rekening.tambah');
    }

    public function submitAdd(){
        $rekening = new Rekening();
        $rekening->nama = $this->nama;
        $rekening->jenis = $this->jenis;
        $rekening->no_rekening = $this->norek;
        $rekening->atas_nama = $this->atasnama;
        $rekening->saldo = $this->saldo;
        $rekening->save();
        $this->emit('refreshTable');
        $this->reset();

        $this->alert(
            'success',
            'Rekening berhasil ditambah!'
        );
    }
}
