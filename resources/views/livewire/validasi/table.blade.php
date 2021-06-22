<div>
    <?php
    /* @var \App\Models\Donatur[] $donaturs */
    ?>
    <table class="table table-bordered table-striped table-vcenter">
        <thead>
        <tr>
            <th class="" style="width: 10%;">Tanggal</th>
            <th>Nama</th>
            <th style="width: 15%;">Jumlah</th>
            <th style="width: 15%;">Bukti Transfer</th>
            <th style="width: 15%;">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($donaturs as $donatur)
            @if($donatur->validasidonasi->file != null)
            <tr>
                <td class="text-small">
                    {{$donatur->created_at->format('d-m-Y')}}
                </td>
                <td class="font-w600">
                    <a href="#">{{$donatur->nama}}</a>
                </td>
                <td class="text-center">
                    <a href="#" class="text-primary">Rp. {{number_format($donatur->jumlah,0,',','.')}}</a>
                </td>
                <td>
                    <a class="btn btn-primary" target="_blank" href="{{asset('storage/'.$donatur->validasidonasi->file)}}">Lihat Gambar</a>
                </td>
                <td class="center">
                    <div class="btn-group text-center">
                        {{--                        <button type="button" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip"--}}
                        {{--                                title="Edit">--}}
                        {{--                            <i class="fa fa-pencil-alt"></i>--}}
                        {{--                        </button>--}}
                        <button type="button" wire:click="accept({{$donatur->id}})" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip"
                                title="Terima">
                            <i class="fa fa-check"></i>
                        </button>
                        <button type="button" wire:click="deny({{$donatur->id}})" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                title="Tolak">
                            <i class="fa fa-window-close"></i>
                        </button>
                    </div>
                </td>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
