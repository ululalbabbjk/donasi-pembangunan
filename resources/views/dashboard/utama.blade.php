@extends('layouts.backend')

@section('container')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Halaman Utama</h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-7">
                @livewire('utama-sumbangan-stats')
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection
