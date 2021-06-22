<?php

namespace App\Http\Livewire\Gambar;

use App\Models\Gambar;
use Livewire\Component;

class Table extends Component
{
    public $gambars,$deleteid;

    protected $listeners = [
        'deleteConfirmed','refreshTable'
    ];

    public function refreshTable(){
        $this->hydrate();
    }

    public function render()
    {
        $this->gambars = Gambar::all();
        return view('livewire.gambar.table');
    }

    public function hydrate(){
        $this->gambars = Gambar::all();
    }

    public function delete($id){
        $this->deleteid = $id;
        $this->confirm('Apakah anda yakin akan menghapus gambar ini?', [
            'toast' => true,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'deleteConfirmed',
        ]);
    }

    public function deleteConfirmed()
    {
        $rekening = Gambar::whereId($this->deleteid)->first();
        $rekening->delete();
        $this->alert(
            'success',
            'Rekening berhasil dihapus!'
        );
    }
}
