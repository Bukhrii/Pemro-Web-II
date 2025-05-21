<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>List Buku</h1>
    <a href="<?= base_url('buku/create'); ?>" class="btn btn-primary mb-3">Tambah Buku</a>

    <table class="table table-hover table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Aksi</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($buku as $b): ?>
                <tr>
                    <td><?= $b['id']; ?></td>
                    <td>
                        <a href="<?= base_url('/buku/edit/'.$b['id']); ?>">Edit</a> |
                        <form action="<?= base_url('/buku/delete/'.$b['id']); ?>" method="post" style="display:inline;">
                            <?= csrf_field(); ?>
                            <button type="submit" class="btn btn-link text-danger p-0 m-0">Hapus</button>
                        </form>
                    </td>
                    <td><?= esc($b['judul']); ?></td>
                    <td><?= esc($b['penulis']); ?></td>
                    <td><?= esc($b['penerbit']); ?></td>
                    <td><?= esc($b['tahun_terbit']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>
