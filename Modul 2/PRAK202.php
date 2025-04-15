<b?php 
    $nama = $nim = $jenisKelamin = "";
    $namaErr = $nimErr = $jenisKelaminErr = "";
            if(isset($_POST['submit'])) {
                if(empty($_POST['nama'])) {
                    $namaErr = "Nama tidak boleh kosong";
                } else {
                    $nama = $_POST['nama'];
                }
                if(empty($_POST['nim'])) {
                    $nimErr = "Nim tidak boleh kosong";
                } else {
                    $nim = $_POST['nim'];
                }
                if(empty($_POST['jenisKelamin'])) {
                    $jenisKelaminErr = "Jenis Kelamin tidak boleh kosong";
                } else {
                    $jenisKelamin = $_POST['jenisKelamin'];
                }
            }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .required {
            color: red;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Nama: <input type="text" name="nama"><span class="required">*<?php echo $namaErr ?></span><br>
        Nim: <input type="text" name="nim"><span class="required">*<?php echo $nimErr ?></span><br>
        Jenis Kelamin :<span class="required">*<?php echo $jenisKelaminErr ?></span><br>
        <input type="radio" name="jenisKelamin" value="Laki-Laki"> Laki-Laki<br>
        <input type="radio" name="jenisKelamin" value="Perempuan"> Perempuan<br>
        <button type="submit" name="submit">Submit</button>
    </form>
    
    <?php 
    if(isset($_POST['submit'])) {
        if(empty($namaErr) && empty($nimErr) && empty($jenisKelaminErr)) {
            echo "<h1>Output: </h1>";
            echo "$nama <br>";
            echo "$nim <br>";
            echo "$jenisKelamin <br>";
        }
    }
        ?>
</body>
</html>