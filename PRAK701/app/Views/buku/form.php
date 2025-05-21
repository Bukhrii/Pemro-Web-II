<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title text-center"><?= isset($buku) ? 'Edit Buku' : 'Tambah Buku'; ?></h1>

            <?php if(session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php foreach(session()->getFlashdata('errors') as $err): ?>
                            <li><?= esc($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?= isset($buku) ? base_url('buku/update/'.$buku['id']) : base_url('buku/store'); ?>" method="post">
                <div class="mb-3">
                    <label for="judul">Judul Buku</label>
                    <input type="text" name="judul" id="judul" class="form-control"
                           value="<?= esc($buku['judul'] ?? old('judul')) ?>">
                </div>
                <div class="mb-3">
                    <label for="penulis">Penulis Buku</label>
                    <input type="text" name="penulis" id="penulis" class="form-control"
                           value="<?= esc($buku['penulis'] ?? old('penulis')) ?>">
                </div>
                <div class="mb-3">
                    <label for="penerbit">Penerbit Buku</label>
                    <input type="text" name="penerbit" id="penerbit" class="form-control"
                           value="<?= esc($buku['penerbit'] ?? old('penerbit')) ?>">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit">Tahun Terbit Buku</label>
                    <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control"
                           value="<?= esc($buku['tahun_terbit'] ?? old('tahun_terbit')) ?>">
                </div>
                <button class="btn btn-success w-100" name="submit">Submit</button>
                <a href="<?= base_url('/buku'); ?>" class="btn btn-secondary w-100 mt-2">Kembali</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
