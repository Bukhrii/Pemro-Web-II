<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="text-center mb-5">
    <h1 class="fw-bold display-4">PRAKTIKUM WEB II MODUL 6</h1>
    <p class="lead text-muted"></p>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-body text-center">
                <i class="bi bi-person-circle display-1 text-primary mb-3"></i>
                <h3 class="card-title"><?= $mahasiswa['nama'] ?></h3>
                <p class="card-text text-muted">NIM: <strong><?= $mahasiswa['nim'] ?></strong></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
