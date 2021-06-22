<div class="table-responsive" wire:ignore.self>
    <table class="table table-bordered table-striped table-vcenter ">
        <thead>
        <tr>
            <th>Nama Rekening</th>
            <th>Jenis Rekening</th>
            <th>No Rekening</th>
            <th>Saldo</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rekenings as $rekening)
            <tr>
                <td class="text-center">{{$rekening->nama}}</td>
                <td class="text-center">{{$rekening->jenis}}</td>
                <td class="text-center">{{$rekening->no_rekening}}</td>
                <td class="text-center">{{$rekening->saldo}}</td>
                <td class="center">
                    <div class="btn-group text-center">
{{--                        <button type="button" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip"--}}
{{--                                title="Edit">--}}
{{--                            <i class="fa fa-pencil-alt"></i>--}}
{{--                        </button>--}}
                        <button type="button" wire:click="delete({{$rekening->id}})" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                title="Delete">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
