<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-sm my-5 w-50">
    <h1 class="text-center">Login</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('pesan')): ?>
        <div class="alert alert-info">
            <?= session()->getFlashdata('pesan') ?>
        </div>
    <?php endif; ?>

    <form action="<?= base_url('/login/proses') ?>" method="POST">
        <div class="mb-3">
            <label for="inputUsername" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="inputUsername" required>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="inputPassword" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?= $this->endSection() ?>