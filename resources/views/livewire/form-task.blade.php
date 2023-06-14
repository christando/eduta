<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label>Nama</label>
            <input wire:model="nama" type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
        </div>

        <div class="form-group">
            <label>Judul</label>
            <input wire:model="judul_task" type="text" name="judul_task" class="form-control" placeholder="Masukkan judul">
        </div>

        <div class="form-group">
            <label>Deskripsi</label>
            <textarea wire:model="deskripsi_task" cols="30" rows="10" class="form-control" placeholder="Masukkan Deskripsi"></textarea>
        </div>

        <div class="form-group text-right">
            <button  type="submit" class="btn btn-info">Submit</button>
        </div>
    </form>
</div>
