<?php

namespace App\Http\Livewire;

use App\Models\Donatur;
use Livewire\Component;

class MakeDonation extends Component
{
    public $jumlahDonasi, $nama=null, $alamat=null, $notelp=null, $email=null, $anonim=false,$doa=null, $metodePembayaran=null;

    public function render()
    {
        return view('livewire.make-donation');
    }

    public function setDonasi($jumlah){
        $this->jumlahDonasi = $jumlah;
    }

    public function submitDonation(){
        $this->resetValidation();
        $this->resetErrorBag();

        if($this->jumlahDonasi==null or $this->jumlahDonasi<=0){
            $this->addError('pesan','Maaf, silahkan masukkan jumlah donasi anda.');
        }
        elseif(!is_int($this->jumlahDonasi)){
            $this->addError('pesan','Maaf, jumlah donasi tidak valid');
        }
        elseif($this->anonim==false AND ($this->nama==null OR $this->alamat==null)){
            $this->addError('pesan','Maaf, mohon isikan nama anda dan alamat anda.');
        }
        elseif($this->anonim==true AND empty($this->nama)){
            $this->addError('pesan','Maaf, mohon isikan nama anda. Kami tidak akan menampilkan nama anda pada daftar Donatur');
        }
        elseif($this->doa==null){
            $this->addError('pesan','Maaf, mohon isikan doa anda');
        }
        elseif ($this->metodePembayaran == null){
            $this->addError('pesan','Maaf, harap pilih metode pembayaran anda');
        }
        else{
            $donatur = new Donatur();
            $donatur->nama = $this->nama;
            $donatur->alamat = $this->alamat;
            $donatur->email = $this->email;
            $donatur->no_telp = $this->notelp;
            $donatur->jumlah = $this->jumlahDonasi;
            $donatur->pesan = $this->doa;
            if($donatur->save()){
                $this->addError('pesan','Berhasil di input ke db');
            }
        }
    }


}
