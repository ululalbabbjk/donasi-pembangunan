<?php

namespace App\Http\Livewire\Gambar;

use App\Models\Gambar;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;
    public $nama, $file;

    public function render()
    {
        return view('livewire.gambar.tambah');
    }

    public function submitAdd()
    {
        $this->validate([
            'file' => 'image|max:5024', // 1MB Max
        ]);

        $gambar = new Gambar();
        $gambar->nama_gambar =  $this->nama;
        $gambar->nama_file = $this->file->store('gambar','public');
        $gambar->save();
        $this->emit('refreshTable');
        $this->reset();
        $this->alert(
            'success',
            'Gambar berhasil ditambah!'
        );
    }
}
