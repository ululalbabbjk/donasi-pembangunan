@extends('layouts.front')

@section('container')
    <!-- Simple Gallery -->
    <div class="bg-white">
        <div class="content content-full">
            <h2 class="content-heading mt-6 mx-lg-4 bg-white">Galeri Foto Pembangunan</h2>
                <div class="row items-push js-gallery img-fluid-100">
                    <?php
                    /* @var \App\Models\Gambar[] $gambars */
                    ?>
                    @foreach($gambars as $gambar)
                    <div class="col-md-6 col-lg-4 col-xl-3 animated fadeIn">
                        <a class="img-link img-link-zoom-in img-thumb img-lightbox" href="{{asset('storage/'.$gambar->nama_file)}}">
                            <img class="img-fluid" src="{{asset('storage/'.$gambar->nama_file)}}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
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
