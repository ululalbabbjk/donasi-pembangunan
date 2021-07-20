@extends('layouts.front')

@section('container')
    <?php
    /* @var \App\Models\Gambar[] $gambars */
    ?>
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('assets/media/photos/awal.jpg');">
        <div class="hero hero-lg bg-white-90 overflow-hidden">
            <div class="hero-inner">
                <div class="content content-full">
                    <div class="row">
                        <div class="col-lg-5 text-center text-lg-left d-lg-flex align-items-lg-center">
                            <div>
                                <h1 class="h32 font-w700 mb-3">
                                    Bantu Pembangunan Pondok Pesantren Ulul Albab Bojongkoneng
                                </h1>
                                <p class="font-size-h5 font-w300 text-muted mb-2">
                                    Dengan Rp. 10.000 kita telah mendukung bersama perjuangan Pesantren Ulul Albab dalam memenuhi hak-hak anak yatim
                                    dan duafa terutama dalam penyediaan pendidikan yang layak dan berkualitas.                                </p>
                                <p class="font-size-h2 mb-2 js-appear-enabled animated fadeIn" data-toggle="appear">
                                    Rp. {{number_format($jumlah,0,',','.')}}
                                </p>
                                <p class="font-size-h5 font-w300 text-muted mb-2 js-appear-enabled animated fadeIn" data-toggle="appear">
{{--                                    terkumpul dari target Rp. <b>{{number_format($target,0,',','.')}},00</b>--}}
                                    <b>sudah terkumpul</b>
                                </p>
{{--                                <div class="progress push">--}}
{{--                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: {{($jumlah/100000000)*100}}%;" aria-valuenow="{{($jumlah/100000000)*100}}" aria-valuemin="0" aria-valuemax="100">--}}
{{--                                        <span class="font-size-sm font-w600">{{($jumlah/100000000)*100}}%</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <span class="d-inline-block">
                                                <a class="btn btn-primary px-3 py-2" href="{{url('/donasi')}}">
                                                    <i class="fa fa-fw fa-money-check mr-1"></i> Donasi Sekarang
                                                </a>
                                            </span>
                                <span class="d-inline-block mt-3">
                                                <a class="btn btn-primary px-3 py-2" href="{{url('https://ululalbabbjk.com/index.php/rencana-peningkatan-fasilitas-pendidikan/')}}">
                                                    <i class="fa fa-fw fa-book mr-1"></i> Rencana Anggaran
                                                </a>
                                            </span>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1 d-none d-lg-block">
{{--                            <img class="img-fluid" src="assets/media/various/promo_dashboard_default.png" srcset="assets/media/various/promo_dashboard_default@2x.png 2x"  alt="Hero Promo">--}}
                                <div class="js-slider" data-dots="true" data-autoplay="true" data-autoplay-speed="3000">
                                    @foreach($gambars as $gambar)
                                    <div>
                                        <img class="img-fluid" src="{{asset('storage/'.$gambar->nama_file)}}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <!-- END Slider with dots -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-meta">
                <div class="invisible" data-toggle="appear" data-timeout="450">
                                <span class="d-inline-block animated bounce infinite">
                                    <i class="si si-arrow-down text-muted fa-2x"></i>
                                </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-lg-none pt-5">
        <div class="col-12 text-center">
            <div class="js-slider" data-dots="true" data-autoplay="true" data-autoplay-speed="3000">
                @foreach($gambars as $gambar)
                    <div>
                        <img class="img-fluid" src="{{asset('storage/'.$gambar->nama_file)}}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Section #1 -->
    <div class="bg-white">
        <div class="content content-full">
            <div class="py-5 push">
                <h2 class="mb-2 text-center">
                    Insya Allah dengan
                    berpartisipasi dalam pembangunan fasilitas pendidikan tersebut akan menjadi sedekah jariyah yang
                    akan terus mengalir pahalanya untuk kita.
                </h2>
{{--                <h3 class="font-w300 text-muted mb-0 text-center">--}}
{{--                    Subtitle--}}
{{--                </h3>--}}
            </div>
{{--            <div class="text-center">--}}
{{--                <p>--}}
{{--                    --}}
{{--                </p>--}}
            </div>
    </div>
    <!-- END Section #1 -->
    <div class="bg-white">
        <div class="content content-full">
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
    </div>
@endsection

@section('endscript')
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/slick-carousel/slick.min.js"></script>

    <!-- Page JS Helpers (Slick Slider Plugin) -->
    <script>jQuery(function(){Dashmix.helpers('slick');});</script>
@endsection

@section('endhead')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="assets/js/plugins/slick-carousel/slick-theme.css">
@endsection
