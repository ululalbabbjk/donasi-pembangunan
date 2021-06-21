@extends('layouts.backend')

@section('container')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Daftar Donatur</h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                    <?php
                    /* @var \App\Models\Donatur[] $donaturs */
                    ?>
                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                        <tr>
                            <th class="d-none d-md-table-cell text-center" style="width: 80px;">#</th>
                            <th class="" style="width: 10%;">Tanggal</th>
                            <th>Nama</th>
                            <th class="d-none d-md-table-cell" style="width: 10%;">Alamat</th>
                            <th class="d-none d-md-table-cell" style="width: 5%;">E-mail</th>
                            <th class="d-none d-md-table-cell" style="width: 10%;">No Telp</th>
                            <th class="d-none d-md-table-cell" style="width: 20%;">Pesan</th>
                            <th style="width: 15%;">Jumlah</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($donaturs as $donatur)
                        <tr>
                            <td class="d-none d-md-table-cell text-center">{{$donatur->id}}</td>
                            <td class="text-small">
                                {{$donatur->created_at->format('d-m-Y')}}
                            </td>
                            <td class="font-w600">
                                <a href="#">{{$donatur->nama}}</a>
                            </td>
                            <td class="d-none d-md-table-cell">
                                {{$donatur->alamat}}
                            </td>
                            <td class="d-none d-md-table-cell text-center">
                                @if($donatur->email)
                                    <a href="mailto:{{$donatur->email}}" class="fa fa-envelope grey"></a>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="d-none d-md-table-cell text-center">
                                {{$donatur->no_telp ?? "-"}}
                            </td>
                            <td class="d-none d-md-table-cell">
                                {{$donatur->pesan}}
                            </td>
                            <td class="text-center">
                                <a href="#" class="text-primary">Rp. {{number_format($donatur->jumlah,0,',','.')}}</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
