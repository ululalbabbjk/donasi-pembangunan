<div class="modal" wire:ignore.self id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tambah Rekening</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="form-group">
                        <label for="nama">Nama Rekening</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Rekening" wire:model="nama">
                    </div>
                    <div class="form-group">
                        <label for="example-select">Jenis Rekening</label>
                        <select class="form-control" id="example-select" name="example-select" wire:model="jenis">
                            <option value="Rekening Bank" selected>Rekening Bank</option>
                            <option value="E-Money">E-Money (Gopay, dll)</option>
                            <option value="QRIS">QRIS</option>
                        </select>
                    </div>
                    @if($jenis != "QRIS")
                        <div class="form-group">
                            <label for="norek">No Rekening</label>
                            <input type="tel" class="form-control" id="norek" name="norek" placeholder="No Rekening" wire:model="norek">
                        </div>
                    @else
                        <div class="form-group">
                            <label for="file">File Gambar Qr</label>
                            <input type="file" class="form-control" id="file" name="file" wire:model="fileqr">
                        </div>
                    @endif
                    <div class="form-group">
                        <label for="atasnama">Atas Nama</label>
                        <input type="text" class="form-control" id="atasnama" name="atasnama" placeholder="Atas Nama" wire:model="atasnama">
                    </div>
                    <div class="form-group">
                        <label for="saldo">Saldo awal</label>
                        <input type="tel" class="form-control" id="saldo" name="saldo" placeholder="Saldo Awal" value="0" wire:model="saldo">
                    </div>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal" wire:click="submitAdd">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>
