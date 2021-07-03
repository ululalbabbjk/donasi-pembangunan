<div class="modal" wire:ignore.self id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="modal-tambah" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tambah Gambar</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <form wire:submit.prevent="submitAdd">
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                    <div class="block-content">
                    <div class="form-group">
                        <label for="nama">Nama Gambar</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Gambar" wire:model="nama">
                    </div>
                    <div class="form-group">
                        <label for="file">File Gambar</label>
                        <input type="file" class="form-control" id="file" name="file" wire:model="file">
                    </div>
                    <div wire:loading wire:target="file">Uploading...</div>
                    </div>
                <div class="block-content block-content-full text-right bg-light">
                    <div @if($file == null OR $nama == null OR $nama == "") style="display: none" @endif>
                        <button type="button" data-dismiss="modal" wire:click="submitAdd" class="btn btn-sm btn-primary">Tambah</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
