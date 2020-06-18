<?php foreach ($buku as $bku) : ?>
<div class="container-fluid mt-3">
    <?php echo form_open_multipart('admin/dashboard_admin/update_buku'); ?>
    <div class="form-group row">
        <label for="judul" class="col-sm-2 col-form-label">Judul Buku </label>
        <div class="col-sm-10">
            <input type="hidden" name="id" class="form-control" value="<?= $bku->id ?>">
            <input type="text" class="form-control" name="judul" id="judul" value="<?= $bku->judul ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="pengarang" class="col-sm-2 col-form-label">Pengarang Buku </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="pengarang" id="pengarang" value="<?= $bku->pengarang ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit Buku </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= $bku->penerbit ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="tahun_terbit" class="col-sm-2 col-form-label">Tahun terbit Buku </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit"
                value="<?= $bku->tahun_terbit ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="jumlah_buku" class="col-sm-2 col-form-label">Jumlah Buku </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="jumlah_buku" id="jumlah_buku"
                value="<?= $bku->jumlah_buku ?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Buku </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="lokasi" id="lokasi" value="<?= $bku->lokasi ?>">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-2">Picture</div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?= base_url('uploads/') . $bku->gambar; ?>" class="img-thumbnail">
                </div>
                <div class="col-sm-9">
                    <div class="custom-file">
                        <span>Gambar Harus Diganti Setiap edit</span>
                        <input type="file" class="form-control-file" id="gambar" name="gambar" ">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type=" submit" class="btn btn-sm btn-primary mb-4 float-right">Simpan</button>

                    </div>
                    <?php endforeach; ?>
