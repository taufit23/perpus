<div class="container-fluid bg-gradient-dark" style="padding-top: 2%">
    <!-- <div class="row mt-4">
        <div class="col-md-11">
            <form action="<?= base_url('dashboard/buku'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control btn-outline-info" placeholder="Pencarian " name="keyword"
                        autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-outline-info" type="submit" name="submit" value="Cari">
                    </div>
                </div>
            </form>
        </div>
    </div> -->

    <div class="row mt-4">
        <div class="col-md-11 float-right mx-auto">
            <div class="navbar-form navbar-right ">
                <?= form_open('dashboard/cari_buku') ?>
                <div class="input-group mb-3 btn-outline-light">
                    <input type="text" class="form-control" placeholder="Pencarian " name="keyword" autocomplete="off"
                        autofocus>
                    <div class="input-group-append">
                        <input class="btn  btn-outline-info" type="submit" name="submit" value="Cari">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <?php foreach ($buku as $bku) : ?>
        <div class=" card mx-1 my-2" style="width: 16rem; ">
            <div class="card-header text-capitalize text-primary font-weight-bold text-center bg-gradient-light">
                <?= $bku->judul; ?>
            </div>
            <img src="<?= base_url('uploads/') . $bku->gambar; ?>" class="img-thumbnail" alt="<?= $bku->gambar ?>"
                style="max-height: 280px">
            <div class="card-body text-center bg-gradient-light">
                <h5 class="card-title text-info">Pengarang : <?= $bku->penerbit ?></h5>
                <span class="badge badge-success">Tersedia : <?= $bku->jumlah_buku ?> Buku</span><br>
                <a href="<?= base_url('dashboard'); ?>">
                    <div class="btn btn-sm btn-primary ">Pinjam</div>
                </a>
                <?= anchor('dashboard/detail_buku/' . $bku->id, '<div class="btn btn-sm btn-info ">Detail</div>') ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
