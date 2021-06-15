<div wire:poll class="block block-rounded block-fx-shadow">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            Jumlah Uang Sumbangan Masuk
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
        </div>
    </div>
    <div class="block-content">
        <h2 class="text-center">Rp. {{number_format($totalSumbangan,0,',','.')}}</h2>
        <h6 class="text-center">dari {{$jumlahOrang}} orang</h6>
    </div>
</div>
