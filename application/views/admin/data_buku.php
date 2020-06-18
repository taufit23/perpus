<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-11 float-right mx-auto">
            <div class="navbar-form navbar-right ">
                <?= form_open('admin/dashboard_admin/cari_buku') ?>
                <div class="input-group mb-3">
                    <input type="text" class="form-control btn-outline-info" placeholder="Pencarian " name="keyword"
                        autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-outline-info" type="submit" name="submit" value="Cari">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <button class="btn btn-sm btn-primary my-2" data-toggle="modal" data-target="#tambah_barang"><i
            class="fas fa-sm fa-plus"></i> Tambah Buku</button>
    <table class="table table-bordered table-dark table-striped table-hover">
        <thead>
            <tr class="text-center">
                <th scope="col">No. </th>
                <th scope="col">Judul</th>
                <th scope="col">Pengarang</th>
                <th scope="col">penerbit</th>
                <th scope="col">tahun terbit</th>
                <th scope="col">Jumlah buku</th>
                <th scope="col">Lokasi buku</th>
                <th scope="col">tanggal Update</th>
                <th colspan="3">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($buku as $bku) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $bku->judul; ?></td>
                <td><?= $bku->pengarang; ?></td>
                <td><?= $bku->penerbit; ?></td>
                <td><?= $bku->tahun_terbit; ?></td>
                <td><?= $bku->jumlah_buku; ?></td>
                <td><?= $bku->lokasi; ?></td>
                <td><?= $bku->tanggal_input; ?></td>

                <td class="text-center">
                    <?= anchor('admin/dashboard_admin/detail_buku/' . $bku->id, '<div class="btn btn-info btn-sm mx-1 btn-circle">
                        <i class="fas my-1 fa-search-plus"></i>
                    </div>'); ?>
                </td>
                <td class="text-center">
                    <?= anchor('admin/dashboard_admin/edit_buku/' . $bku->id, '<div class="btn btn-primary btn-sm mx-1 btn-circle">
                        <i class="fas my-1 fa-edit"></i>
                    </div>'); ?>
                </td>
                <td class="text-center">
                    <?= anchor('admin/dashboard_admin/hapus/' . $bku->id, '<div class="btn btn-danger btn-sm mx-1 btn-circle">
                        <i class="fas my-1 fa-trash"></i>
                    </div>') ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/dashboard_admin/tambah_aksi'); ?>" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" name="judul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" name="pengarang" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Tahun terbit</label>
                        <input type="text" name="tahun_terbit" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Jumlah Buku</label>
                        <input type="text" name="jumlah_buku" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Lokasi</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="lokasi" value="Rak 1"
                                id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Rak 1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="lokasi" value="Rak 2"
                                id="defaultCheck2">
                            <label class="form-check-label" for="defaultCheck1">
                                Rak 2
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="lokasi" value="Rak 3"
                                id="defaultCheck3">
                            <label class="form-check-label" for="defaultCheck1">
                                Rak 3
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="lokasi" value="Rak 4"
                                id="defaultCheck4">
                            <label class="form-check-label" for="defaultCheck1">
                                Rak 4
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Update Date</label>
                        <input type="date" name="update" class="form-control" value="<? date_create() ?>">
                    </div>

                    <div class="form-group">
                        <label>Gambar</label><br>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
