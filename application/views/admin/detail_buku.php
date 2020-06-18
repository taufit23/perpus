<div class="container-fluid my-3">
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

                    <span class="badge badge-success float-right">Tersedia : <?= $bku->jumlah_buku ?>
                        Buku</span><br>
                    <a href="<?= base_url('admin/dashboard_admin/data_buku'); ?>">
                        <div class="btn btn-sm btn-warning float-right mb-3">Kembali</div>
                    </a>
                    <a href="<?= base_url('admin/dashboard_admin/edit_buku/' . $bku->id); ?>">
                        <div class="btn btn-sm btn-info float-right mb-3 mx-2">edit</div>
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
</div>
