<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h2 class="fw-bold mb-4">Profil Mahasiswa</h2>
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card border-0 shadow">
            <img src="<?= base_url($mahasiswa['gambar']) ?>" class="card-img-top rounded" alt="Foto Profil">
        </div>
    </div>

    <div class="col-lg-8">
        <div class="card border-0 shadow p-4">
            <table class="table table-borderless">
                <tr>
                    <th class="text-muted w-25">Nama Lengkap</th>
                    <td><?= $mahasiswa['nama'] ?></td>
                </tr>
                <tr>
                    <th class="text-muted">NIM</th>
                    <td><?= $mahasiswa['nim'] ?></td>
                </tr>
                <tr>
                    <th class="text-muted">Asal Prodi</th>
                    <td><?= $mahasiswa['asal_prodi'] ?></td>
                </tr>
                <tr>
                    <th class="text-muted">Hobi</th>
                    <td><?= $mahasiswa['hobi'] ?></td>
                </tr>
                <tr>
                    <th class="text-muted">Skill</th>
                    <td><?= $mahasiswa['skill'] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
