<?php 
    require_once 'Koneksi.php';
    require_once 'Model.php';

    $id = $_GET['id'] ?? null;
    $data = [
      'nama_member' => '',
      'nomor_member' => '',
      'alamat' => '',
      'tgl_mendaftar' => '',
      'tgl_terakhir_bayar' => ''
    ];

    
    if ($id) {
      $data = getByIdMember($conn, $id);
    }
    $tanggalMendaftar = $data['tgl_mendaftar'] ? date('Y-m-d\TH:i:s', strtotime($data['tgl_mendaftar'])) : '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $input = [
        'nama_member' => $_POST['nama'],
        'nomor_member' => $_POST['nomor'],
        'alamat' => $_POST['alamat'],
        'tgl_mendaftar' => $id ? $data['tgl_mendaftar'] : date('Y-m-d H:i:s'),
        'tgl_terakhir_bayar' => $_POST['tanggalTerakhirBayar']
      ];
      
      if ($id) {
        updateMember($conn, $id, $input);
      } else {
        insertMember($conn, $input);
      }
      header("Location: Member.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta Id="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

    <div class="container-sm my-5 w-50">
        <h1 class="text-center">
        <?= $id ? 'Form Edit Member' : 'Form Tambah Member' ?>
        </h1>
        <br>
        <form method="POST">
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?= $data['nama_member'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="inputNomor" class="form-label">Nomor</label>
                <input type="text" class="form-control" name="nomor" value="<?= $data['nomor_member'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $data['alamat'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="inputTanggalTerakhirBayar" class="form-label">Tanggal Terakhir Bayar</label>
                <input type="date" class="form-control" name="tanggalTerakhirBayar" value="<?= $data['tgl_terakhir_bayar'] ?>" required>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-primary" onclick="location.href='Member.php'">Kembali</button>
          </form>
    </div>
    
</body>

</html>