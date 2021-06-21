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
{{--        TODO IMPLEMENT THIS--}}
{{--        <div class="row">--}}
{{--            <div class="form-group">--}}
{{--                <input type="file" id="bukti" class=""></div>--}}
{{--            </div>--}}
{{--        </div>--}}
            @endif
    </div>

</div>
