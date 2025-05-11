<?php 
require_once 'Koneksi.php';
require_once 'Model.php';

$members = getAllMember($conn);
$bukuBuku = getAllBuku($conn);
$id = $_GET['id'] ?? null;
$error = '';

$data = [
  'id_member' => '',
  'id_buku' => '',
  'tgl_pinjam' => '',
  'tgl_kembali' => ''
];

if ($id) {
  $data = getPeminjamanById($conn, $id);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $input = [
    'id_member' => $_POST['id_member'],
    'id_buku' => $_POST['id_buku'],
    'tgl_pinjam' => $_POST['tgl_pinjam'],
    'tgl_kembali' => $_POST['tgl_kembali']
  ];

  if ($id) {
    updatePeminjaman($conn, $id, $input);
  } else {
    insertPeminjaman($conn, $input);
  }
  header("Location: Peminjaman.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Peminjaman</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-sm my-5 w-50">
    <h1 class="text-center"><?= $id ? 'Edit' : 'Tambah' ?> Peminjaman</h1>
    <form method="POST">
      <div class="mb-3">
        <label class="form-label">Nama Member</label>
        <select name="id_member" class="form-select" required>
          <option value="">-- Pilih Member --</option>
          <?php foreach ($members as $m): ?>
            <option value="<?= $m['id_member'] ?>" <?= $data['id_member'] == $m['id_member'] ? 'selected' : '' ?>>
              <?= $m['nama_member'] ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Judul Buku</label>
        <select name="id_buku" class="form-select" required>
          <option value="">-- Pilih Buku --</option>
          <?php foreach ($bukuBuku as $b): ?>
            <option value="<?= $b['id_buku'] ?>" <?= $data['id_buku'] == $b['id_buku'] ? 'selected' : '' ?>>
              <?= $b['judul_buku'] ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Tanggal Peminjaman</label>
        <input type="date" name="tgl_pinjam" class="form-control" value="<?= $data['tgl_pinjam'] ?>" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Tanggal Pengembalian</label>
        <input type="date" name="tgl_kembali" class="form-control" value="<?= $data['tgl_kembali'] ?>" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="Peminjaman.php" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>
</html>
