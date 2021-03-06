<?php

namespace App\Http\Livewire;

use App\Models\Donatur;
use App\Models\Rekening;
use App\Models\ValidasiDonasi;
use Livewire\Component;

class MakeDonation extends Component
{
    public $jumlahDonasi, $nama=null, $alamat=null, $notelp=null, $email=null, $anonim=false,$doa=null, $metodePembayaran=null;
    public $rekenings;

    public function render()
    {
        $this->rekenings = Rekening::all();
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
//        elseif(!is_int($this->jumlahDonasi)){
//            $this->addError('pesan','Maaf, jumlah donasi tidak valid');
//        }
        elseif($this->anonim==false AND ($this->nama==null OR $this->alamat==null)){
            $this->addError('pesan','Maaf, mohon isikan nama anda dan alamat anda.');
        }
        elseif($this->anonim==true AND empty($this->nama)){
            $this->addError('pesan','Maaf, mohon isikan nama anda. Kami tidak akan menampilkan nama anda pada daftar Donatur');
        }
        elseif($this->anonim==true AND empty($this->email)){
            $this->addError('pesan','Maaf, mohon isikan email anda. Kami akan mengirimkan bukti donasi kepada email anda');
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
            $donatur->anonim = $this->anonim;
            $donatur->validated = false;
            $donatur->save();
            $validasi = new ValidasiDonasi();
            $validasi->id = $donatur->id;
            $validasi->id_rekening = $this->metodePembayaran;
            $validasi->file = null;
            if($validasi->save()){
                return redirect('/donasi/validate/'.$donatur->id);
            }
        }
    }


}
