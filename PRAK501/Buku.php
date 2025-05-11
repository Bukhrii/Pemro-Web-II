<?php 
    require_once 'Koneksi.php';
    require_once 'Model.php';

    $bukuBuku = getAllBuku($conn);
    
    if (isset($_GET['delete'])) {
      deleteBuku($conn,$_GET['delete']);
      header("Location: Buku.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid my-5">
        <h1 class="text-center">
            Daftar Buku
        </h1>
        <div class="d-flex justify-content-between mb-3">
            <td><button class="btn btn-primary" type="submit" onclick="location.href='index.php'">Kembali</button></td>
            <td><button class="btn btn-primary" type="submit" name="tambahData" onclick="location.href='formBuku.php'">Tambah Data Baru</button></td>
        </div>                 
        <table class="table table-striped text-center">
            <tr>
            </tr>
              <tr>
                <th scope="col">ID Buku</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Opsi</th>
              </tr>
            <tbody>
              <?php foreach($bukuBuku as $index => $buku): ?>
              <tr>
                <th scope="row"><?php echo $buku['id_buku'] ?></th>
                <td><?php echo $buku['judul_buku'] ?></td>
                <td><?php echo $buku['penulis'] ?></td>
                <td><?php echo $buku['penerbit'] ?></td>
                <td><?php echo $buku['tahun_terbit'] ?></td>
                <td name="opsi">
                    <a href="FormBuku.php?id=<?php echo $buku['id_buku'] ?>" class="btn btn-success" name="edit">Edit</a>
                    <a href="Buku.php?delete=<?php echo $buku['id_buku'] ?>" class="btn btn-danger" name="hapus" onc>Hapus</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
    </div>
    
</body>

</html>