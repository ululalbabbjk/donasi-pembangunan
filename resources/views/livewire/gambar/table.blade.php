<div class="table-responsive" wire:ignore.self>
    <table class="table table-bordered table-striped table-vcenter ">
        <thead>
        <tr>
            <th>Nama Gambar</th>
            <th>Nama File</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gambars as $gambar)
            <tr>
                <td class="text-center">{{$gambar->nama_gambar}}</td>
                <td class="text-center">{{$gambar->nama_file}}</td>
                <td class="text-center"><img src="{{asset('storage/'.$gambar->nama_file)}}" width="100px" class="img-thumbnail"></td>
                <td class="center">
                    <div class="btn-group text-center">
                        {{--                        <button type="button" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip"--}}
                        {{--                                title="Edit">--}}
                        {{--                            <i class="fa fa-pencil-alt"></i>--}}
                        {{--                        </button>--}}
                        <button type="button" wire:loading.attr="disabled" wire:click="delete({{$gambar->id}})" class="btn btn-sm btn-danger" data-toggle="tooltip"
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
