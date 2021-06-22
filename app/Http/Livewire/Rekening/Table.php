<?php

namespace App\Http\Livewire\Rekening;

use App\Models\Rekening;
use Livewire\Component;

class Table extends Component
{
    public $rekenings,$deleteid;

    protected $listeners = [
        'deleteConfirmed', 'refreshTable'
    ];

    public function refreshTable(){
        $this->hydrate();
    }
    public function render()
    {
        $this->rekenings = Rekening::all();
        return view('livewire.rekening.table');
    }

    public function hydrate(){
        $this->rekenings = Rekening::all();
    }

    public function delete($id){
        $this->deleteid = $id;
        $this->confirm('Apakah anda yakin akan menghapus rekening ini?', [
            'toast' => true,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'deleteConfirmed',
        ]);
    }

    public function deleteConfirmed()
    {
        $rekening = Rekening::whereId($this->deleteid)->first();
        $rekening->delete();
        $this->alert(
            'success',
            'Rekening berhasil dihapus!'
        );
    }
}
