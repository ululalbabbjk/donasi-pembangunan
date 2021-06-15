@extends('layouts.backend')

@section('container')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Daftar Rekening</h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="block-content block-rounded">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <?php
            /* @var \App\Models\Rekening[] $rekenings */
            ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                    <tr>
                        <th class="d-none d-md-table-cell text-center" style="width: 80px;">#</th>
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
                            <td class="text-center">{{$rekening->id}}</td>
                            <td class="text-center">{{$rekening->nama}}</td>
                            <td class="text-center">{{$rekening->jenis}}</td>
                            <td class="text-center">{{$rekening->no_rekening}}</td>
                            <td class="center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
                                            title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip"
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
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('scripts')
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/datatables/buttons/buttons.colVis.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{asset('assets/js/pages/be_tables_datatables.min.js')}}"></script>
@endsection

@section('head')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">
@endsection
