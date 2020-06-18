<!-- visi misi -->
<div class="my-4 bg-light counter" id="visi_misi">
    <div class="container-fluid">
        <?php foreach ($visi_misi as $vsm) : ?>
        <div class="card mb-3 bg-transparent mx-auto">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        <div class="card-header bg-primary border-success text-light text-uppercase text-center">
                            <?= $title ?>
                            <h3><?= $vsm->about; ?></h3>
                        </div>
                        <div class="card-body text-success bg-gradient-secondary">
                            <h5 class="card-title">Visi</h5>
                            <li><?= $vsm->visi1; ?></li>
                            <li><?= $vsm->visi2; ?></li>
                            <li><?= $vsm->visi3; ?></li>
                            <li><?= $vsm->visi4; ?></li>
                        </div>
                        <div class="card-body text-info bg-gradient-dark">
                            <h5 class="card-title">Misi</h5>
                            <li><?= $vsm->misi1; ?></li>
                            <li><?= $vsm->misi2; ?></li>
                            <li><?= $vsm->misi3; ?></li>
                            <li><?= $vsm->misi4; ?></li>
                        </div>
                    </div>
                </div>
            </div>
            <?= anchor('admin/dashboard_admin/edit_visi_misi/' . $vsm->id, '<div class="btn btn-outline-primary mb-3 mx-4 float-right">
                        <i class="fas my-1 fa-edit"></i>Edit
                    </div>'); ?>
        </div>
        <?php endforeach; ?>
