<?php 
    require_once 'Koneksi.php';
    require_once 'Model.php';

    $members = getAllMember($conn);

    if (isset($_GET['delete'])) {
      deleteMember($conn,$_GET['delete']);
      header("Location: Member.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid my-5">
        <h1 class="text-center">
            Daftar Member
        </h1>
        <div class="d-flex justify-content-between mb-3">
            <td><button class="btn btn-primary" type="submit" onclick="location.href='index.php'">Kembali</button></td>
            <td><button class="btn btn-primary" type="submit" name="tambahData" onclick="location.href='formMember.php'">Tambah Data Baru</button></td>
        </div>                 
        <table class="table table-striped text-center">
              <tr>
                <th scope="col">ID Member</th>
                <th scope="col">Nama Member</th>
                <th scope="col">Nomor Member</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tanggal Mendaftar</th>
                <th scope="col">Tanggal Terakhir Bayar</th>
                <th scope="col">Opsi</th>
              </tr>
            <tbody>
              <?php foreach($members as $index => $member): ?>
              <tr>
                <th scope="row"><?php echo $member['id_member'] ?></th>
                <td><?php echo $member['nama_member'] ?></td>
                <td><?php echo $member['nomor_member'] ?></td>
                <td><?php echo $member['alamat'] ?></td>
                <td><?php echo $member['tgl_mendaftar'] ?></td>
                <td><?php echo $member['tgl_terakhir_bayar'] ?></td>
                <td name="opsi">
                    <a href="FormMember.php?id=<?php echo $member['id_member'] ?>" class="btn btn-success" name="edit">Edit</a>
                    <a href="Member.php?delete=<?php echo $member['id_member'] ?>" class="btn btn-danger" name="hapus" onc>Hapus</a>
                </td>
              </tr>
              <?php endforeach ?>
            </tbody>
          </table>
    </div>
    
</body>

</html>