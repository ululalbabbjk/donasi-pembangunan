<?php

namespace App\Http\Livewire;

use App\Models\Donatur;
use App\Models\Rekening;
use App\Models\ValidasiDonasi;
use Livewire\Component;
use Livewire\WithFileUploads;

class ValidateDonation extends Component
{
    use WithFileUploads;
    /**
     * @var ValidasiDonasi $validasi
     */
    public $validasi;
    public $rekening,$donatur,$id_donasi,$filevalidasi;

    public function render()
    {
        $this->validasi = ValidasiDonasi::whereId($this->id_donasi)->first();
        $this->donatur = Donatur::whereId($this->id_donasi)->first();
        $this->rekening = Rekening::whereId($this->validasi->id_rekening)->first();

        return view('livewire.validate-donation');
    }

    public function submitValidate(){
        $this->validasi->file = $this->filevalidasi->store('gambar','public');
        $this->validasi->save();
        return $this->redirect('/donasi/validate/'.$this->validasi->id);
    }
}
