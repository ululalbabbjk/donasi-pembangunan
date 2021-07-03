<div class="bg-white pt-5">
    <div class="content content-full">
        @if($donatur->validated == false)
        <div class="row">
            <div class="col-12">
                <div class="text-center h3">Terimakasih atas Donasi Anda. Silahkan transfer ke Rekening dibawah ini </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="text-primary text-center h3">{{$rekening->nama}}</div>
                <div class="text-center h1">{{$rekening->no_rekening}}</div>
            </div>
            <div class="col-12">
                <div class="text-center h3">Atas Nama : {{$rekening->atas_nama}}</div>
            </div>
            <div class="col-12">
                <div class="text-center h3">Sejumlah : Rp. {{number_format($donatur->jumlah,0,',','.')}}</div>
            </div>
        </div>
        <hr>
        <div class="row">
            @if($validasi->file == null)
            <div class="h5">Bantu kami memvalidasi donasi anda. Silahkan upload bukti transfer anda untuk kami validasi.</div>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="form-group">
                    <label for="bukti">Bukti Transfer</label>
                    <input type="file" id="bukti" name="bukti" accept="image/*" wire:model="filevalidasi">
                </div>
                <div class="form-group">
                    <div wire:loading.remove @if($filevalidasi == null) style="display: none" @endif>
                        <button type="button" wire:loading.attr="disabled" wire:click="submitValidate" class="btn btn-primary">Kirim bukti transfer</button>
                    </div>
                </div>
                <div wire:loading>Uploading...</div>
            </div>
            @else
            <div class="h5">Terimakasih sudah mengirimkan bukti transfer anda. Kami akan memvalidasi donasi anda beberapa saat.</div>
                @endif
        </div>
            @endif
    </div>

</div>
