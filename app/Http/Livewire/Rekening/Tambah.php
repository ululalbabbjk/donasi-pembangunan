<?php

namespace App\Http\Livewire\Rekening;

use App\Models\Rekening;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;
    public $nama, $jenis="Rekening Bank",$norek,$atasnama,$saldo=0,$fileqr;

    public function render()
    {
        return view('livewire.rekening.tambah');
    }

    public function submitAdd(){
        $this->validate([
            'fileqr' => 'image|max:5024',
        ]);
        $rekening = new Rekening();
        $rekening->nama = $this->nama;
        $rekening->jenis = $this->jenis;
        if($this->jenis = "QRIS"){
            $rekening->no_rekening = $this->fileqr->store('gambar','public');
        }
        else {
            $rekening->no_rekening = $this->norek;
        }
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
