@extends('layouts.backend')

@section('container')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Pengaturan Donasi</h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
        @if(session('pesan'))
            <div class="row">
                <div class="col-12">
                    <div class="alert alert-primary" role="alert">
                        {{session('pesan')}}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                @csrf
                <label for="target">Target Donasi</label>
                <div class="form-group">
                    Rp. <input type="tel" name="target" id="target" value="{{$target}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Ubah pengaturan</button>
                </div>
                </form>
            </div>
        </div>

    </div>
    <!-- END Page Content -->

    <!-- Modal Tambah -->
    @livewire('gambar.tambah')
@endsection

@section('scripts')

@endsection

@section('head')

@endsection
