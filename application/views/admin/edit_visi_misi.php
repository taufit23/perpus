<div class="container-fluid">
    <h3><i class="fas fa-edit"></i><?= $title ?></h3>
    <?php foreach ($visi_misi as $vsm) : ?>
    <?php echo form_open_multipart('admin/dashboard_admin/update'); ?>
    <div class="form-group was-validated">
        <label>About</label>
        <input type="text" name="about" class="form-control my-1" value="<?= $vsm->about ?>">
    </div>
    <div class="form-group was-validated">
        <label>Visi</label>
        <input type="text" name="visi1" class="form-control my-1" value="<?= $vsm->visi1 ?>">
        <input type="text" name="visi2" class="form-control my-1" value="<?= $vsm->visi2 ?>">
        <input type="text" name="visi3" class="form-control my-1" value="<?= $vsm->visi3 ?>">
        <input type="text" name="visi4" class="form-control my-1" value="<?= $vsm->visi4 ?>">
    </div>

    <div class="form-group was-validated">
        <label>Misi</label>
        <input type="hidden" name="id" class="form-control my-1" value="<?= $vsm->id ?>">
        <input type="text" name="misi1" class="form-control my-1" value="<?= $vsm->misi1 ?>">
        <input type="text" name="misi2" class="form-control my-1" value="<?= $vsm->misi2 ?>">
        <input type="text" name="misi3" class="form-control my-1" value="<?= $vsm->misi3 ?>">
        <input type="text" name="misi4" class="form-control my-1" value="<?= $vsm->misi4 ?>">
    </div>
    <button type="submit" class="btn btn-sm btn-primary my-2">Simpan</button>

    <?php endforeach; ?>

</div>
