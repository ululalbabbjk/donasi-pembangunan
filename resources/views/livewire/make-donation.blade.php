<div class="bg-white pt-5">

    <div class="content content-full">
        <div class="row">
            <div class="col col-12">
                <div class="pt-5 push">
                    <div wire:offline class="text-danger text-center">
                        Maaf, koneksi anda terputus. Anda tidak dapat melanjutkan donasi.
                    </div>
                    <h2 class="mb-2 text-center">
                        <div class="mb-2">Masukan Nominal Donasi</div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="button" class="btn btn-alt-success">Rp. </button>
                            </div>
                            <input wire:model="jumlahDonasi" type="number" class="form-control form-control-alt form-control-lg" id="donasi" name="donasi" placeholder="0" aria-label="Jumlah Donasi">
                        </div>
                    </h2>
                    <h3 class="font-w300 text-muted mb-0 text-center">
                        Tidak ada batas minimal untuk berdonasi
                    </h3>
                </div>
            </div>
            <div class="col col-12">
                <div class="text-center">
                    <div class="row">
                        <div class="col-6 col-md-3 pb-3">
                            <button class="btn btn-outline-primary w-100" wire:click="setDonasi(10000)">Rp. 10.000</button>
                        </div>
                        <div class="col-6 col-md-3">
                            <button class="btn btn-outline-primary w-100" wire:click="setDonasi(25000)">Rp. 25.000</button>
                        </div>
                        <div class="col-6 col-md-3">
                            <button class="btn btn-outline-primary w-100" wire:click="setDonasi(50000)">Rp. 50.000</button>
                        </div>
                        <div class="col-6 col-md-3">
                            <button class="btn btn-outline-primary w-100" wire:click="setDonasi(100000)">Rp. 100.000</button>
                        </div>
                        <div class="col-12 pt-3">
                            <button class="btn btn-outline-primary w-100" wire:click="setDonasi(200000)">Rp. 200.000</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col col-12 col-xl-6">
                <div class="h4">Beritahu kami tentang anda.</div>
                <div class="form-group">
                    <div class="custom-control custom-block custom-control-success">
                        <input type="checkbox" class="custom-control-input" id="anonim" name="anonim" wire:model="anonim">
                        <label class="custom-control-label" for="anonim">
                                                    <span class="d-block text-center">
                                                        <i class="fa fa-user-slash fa-2x mb-2 text-black-50"></i><br>
                                                        Saya ingin berdonasi secara anonim
                                                    </span>
                        </label>
                        <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                    </div>

                    <div class="text-w200 text-muted mb-0 pt-1 text-center {{$anonim ? "d-block" : "d-none"}}">
                        Kami akan menampilkan Donasi anda sebagai "Hamba Allah" pada halaman Daftar Donatur
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-text-input">Nama Lengkap</label>
                    <input type="text" wire:model="nama" class="form-control" id="nama" name="nama" placeholder="Silahkan isikan nama anda disini.">
                </div>
                <div class="{{$anonim ? "d-none" : "d-block"}}">
                    <div class="form-group">
                        <label for="example-text-input">Alamat</label>
                        <input type="text" wire:model="alamat" class="form-control" id="alamat" name="alamat" placeholder="Silahkan isikan alamat anda.">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">No Telepon</label>
                        <input type="text" wire:model="notelp" class="form-control" id="no_telp" name="no_telp" placeholder="Isian ini tidak wajib di isi.">
                    </div>
                    <div class="form-group">
                        <label for="example-text-input">E-Mail</label>
                        <input type="text" wire:model="email" class="form-control" id="email" name="email" placeholder="Isian ini tidak wajib di isi.">
                    </div>
                    <div class="form-group">
                        <div class="text-w200 text-muted mb-0 pt-1">
                            Kami mungkin akan mengirimkan pesan kepada anda perihal perkembangan Pembangunan Pesantren melalui E-mail/WhatsApp jika anda memberitahukan No Telepon/E-mail anda.
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-text-input">Doa untuk donasi ini</label>
                    <textarea class="form-control" wire:model="doa" style="height: 100px" id="pesan" name="pesan" placeholder="Silahkan tulis Doa untuk kami atau anda disini agar doa anda bisa dilihat dan diamini oleh kami dan Donatur lainnya."></textarea>
                </div>
                <div class="h4">Metode Pembayaran Donasi Anda</div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            @foreach($rekenings as $rekening)
                                <div class="custom-control custom-block custom-control-success">
                                <input type="radio" class="custom-control-input" id="{{$rekening->id}}" name="metode" value="{{$rekening->id}}" wire:model="metodePembayaran">
                                <label class="custom-control-label" for="{{$rekening->id}}">
                                                    <span class="d-block text-center">
                                                        <i class="fa fa-money-check fa-2x mb-2 text-black-50"></i><br>
                                                        {{$rekening->nama}}
                                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                                    <i class="fa fa-check"></i>
                                                </span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    @error('pesan')
                    <div class="alert alert-danger" role="alert">
                        <p class="mb-0">{{$message}}</a></p>
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <a href="javascript:void(0)" wire:click="submitDonation" class="btn btn-primary" id="Donasi" name="Donasi">Kirim Donasi</a>
                </div>
            </div>
        </div>
    </div>
</div>
