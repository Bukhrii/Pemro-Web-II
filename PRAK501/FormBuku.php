<?php 
  require_once 'Koneksi.php';
  require_once 'Model.php';

  $id = $_GET['id'] ?? null;
    $data = [
      'judul_buku' => '',
      'penulis' => '',
      'penerbit' => '',
      'tahun_terbit' => '',
    ];

    $error = '';

      if ($id) {
      $data = getByIdBuku($conn, $id);
    }
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if(isset($_POST['TahunTerbit']) && !is_numeric($_POST['TahunTerbit'])) {
      $error = "Masukkan Angka!";
    } else {
      $input = [
        'judul_buku' => $_POST['JudulBuku'],
        'penulis' => $_POST['Penulis'],
        'penerbit' => $_POST['Penerbit'],
        'tahun_terbit' => $_POST['TahunTerbit']
      ];
      if ($id) {
        updateBuku($conn, $id, $input);
      } else {
        insertBuku($conn, $input);
      }
      header("Location: Buku.php");
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Id="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

    <div class="container-sm my-5 w-50">
        <h1 class="text-center">
            <?= $id ? 'Form Edit Buku' : 'Form Tambah Buku' ?>
        </h1>
        <br>
        <form method="POST">
            <div class="mb-3">
                <label for="inputJudulBuku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" name="JudulBuku" value="<?= $data['judul_buku'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="inputPenulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" name="Penulis" value="<?= $data['penulis'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="inputPenerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" name="Penerbit" value="<?= $data['penerbit'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="inputTahunTerbit" class="form-label">Tahun Terbit</label>
                <input type="text" class="form-control" name="TahunTerbit" value="<?= $data['tahun_terbit'] ?>" required>
                <?php if ($error): ?>
                  <div class="text-danger"><?= $error ?></div>
                <?php endif; ?>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-primary" onclick="location.href='Buku.php'">Kembali</button>
          </form>
    </div>
    
</body>

</html>