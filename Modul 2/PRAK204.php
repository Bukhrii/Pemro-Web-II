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
        Nilai : <input type="text" name="nilai"><br>
        <button type="konversi" name="konversi">Konversi</button><br>
        <h1>
            <?php 
                if(isset($_POST['konversi'])) {
                    $nilai = $_POST['nilai'];
                    if (!is_numeric($nilai)) {
                        $hasil = "Inputan Tidak Valid";
                    } elseif ($nilai == 0) {
                        $hasil = "Nol";
                    } elseif ($nilai > 0 && $nilai < 10) {
                        $hasil = "Satuan";
                    } elseif ($nilai >= 10 && $nilai < 20) {
                        $hasil = "Belasan";
                    } elseif ($nilai >= 20 && $nilai < 100) {
                        $hasil = "Puluhan";
                    } elseif ($nilai >= 100 && $nilai < 1000) {
                        $hasil = "Ratusan";
                    } elseif ($nilai >= 1000) {
                        $hasil = "Anda Menginput Melebihi Limit Bilangan";
                    } else {
                        $hasil = "Inputan Tidak Valid";
                    }
                    echo "Hasil: " . $hasil;
                }
            ?>
        </h1>
    </form>
</body>
   
</html>