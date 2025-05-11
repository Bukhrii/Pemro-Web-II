<?php 
    require_once 'Koneksi.php';
    require_once 'Model.php';

    $listPeminjaman = getAllPeminjaman($conn);
    
    if (isset($_GET['delete'])) {
      deletePeminjaman($conn,$_GET['delete']);
      header("Location: Peminjaman.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid my-5">
        <h1 class="text-center">
            Daftar Peminjaman
        </h1>
        <div class="d-flex justify-content-between mb-3">
            <td><button class="btn btn-primary" type="submit" onclick="location.href='index.php'">Kembali</button></td>
            <td><button class="btn btn-primary" type="submit" name="tambahp" onclick="location.href='formPeminjaman.php'">Tambah Data Baru</button></td>
        </div>                 
        <table class="table table-striped text-center">
            <tr>
            </tr>
              <tr>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">Nama Member</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Opsi</th>
              </tr>
            <tbody>
              <?php foreach($listPeminjaman as $p): ?>
              <tr>
                <th scope="row" name="idPeminjaman"><?php echo $p['id_peminjaman'] ?></th>
                <td name="namaMember"><?php echo $p['nama_member'] ?></td>
                <td name="judulBuku"><?php echo $p['judul_buku'] ?></td>
                <td name="tanggalPeminjaman"><?php echo $p['tgl_pinjam'] ?></td>
                <td name="tanggalPengembalian"><?php echo $p['tgl_kembali'] ?></td>
                <td name="opsi">
                    <a href="FormPeminjaman.php?id=<?php echo $p['id_peminjaman'] ?>" class="btn btn-success" name="edit">Edit</a>
                    <a href="Peminjaman.php?delete=<?php echo $p['id_peminjaman'] ?>" class="btn btn-danger" name="hapus" onc>Hapus</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
    </div>
    
</body>

</html>