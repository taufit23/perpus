<?php foreach ($buku as $bku) : ?>
<div class="card mb-3 ">
    <div class="row no-gutters my-2 mx-2">
        <div class="col-md-4">
            <img src="<?= base_url('uploads/') . $bku->gambar ?>" class="card-img img-thumbnail mx-2" alt="...">
        </div>
        <div class="col-md-8 bg-gradient-light border-warning">
            <div class="card-body">
                <h2 class="card-title text-info">Judul Buku : <?= $bku->judul ?></h2>
                <p class=" card-text">Pengarang : <?= $bku->pengarang ?></p>
                <p class=" card-text">Penerbit : <?= $bku->penerbit ?></p>
                <p class=" card-text">Tahun Terbit : <?= $bku->tahun_terbit ?></p>
                <p class=" card-text">Lokasi Buku : <?= $bku->lokasi ?></p>

                <span class="badge badge-success float-right">Tersedia : <?= $bku->jumlah_buku ?> Buku</span><br>
                <a href="<?= base_url('dashboard'); ?>">
                    <div class="btn btn-sm btn-primary float-right mx-1">Pinjam</div>
                </a>
                <a href="<?= base_url('dashboard/buku'); ?>">
                    <div class="btn btn-sm btn-warning float-right">Kembali</div>
                </a>
            </div>
        </div>
        <div class="col-md text-center">
            <div class=" card-footer text-muted">
                Last Update : <?= $bku->tanggal_input ?>
            </div>
        </div>
    </div>

</div>
<?php endforeach; ?>
