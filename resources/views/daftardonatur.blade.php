@extends('layouts.front')

@section('container')
    <!-- Simple Gallery -->
    <div class="bg-white">
        <div class="content content-full">
{{--            <h2 class="content-heading mt-6 mx-lg-4 bg-white">Daftar Donatur</h2>--}}
            <h2 class="content-heading mt-6 mx-lg-4 bg-white">Terimakasih kepada {{$jumlah}} orang yang membantu membangun Pondok Pesantren Ulul Albab Bojongkoneng</h2>
            <div class="row">
                <?php
                /* @var \App\Models\Donatur[] $donaturs */
                ?>
                @foreach($donaturs as $donatur)
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="block block-rounded block-fx-shadow">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">{{$donatur->anonim ? 'Hamba Allah' : $donatur->nama}}</h3>
                                <small>Rp. {{number_format($donatur->jumlah,0,',','.')}}</small>
                            </div>
                            <div class="block-content">
                                <p>{{$donatur->pesan}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    <!-- END Simple Gallery -->
@endsection

@section('endscript')
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/slick-carousel/slick.min.js"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){Dashmix.helpers('slick');});</script>

    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Page JS Helpers (Magnific Popup Plugin) -->
    <script>jQuery(function(){Dashmix.helpers('magnific-popup');});</script>
@endsection

@section('endhead')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick-theme.css">
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/magnific-popup/magnific-popup.css">
@endsection
