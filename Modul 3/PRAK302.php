<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Tinggi : <input type="text" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="gambar"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php 
        if(isset($_POST['submit'])) {
            $tinggi = (int)$_POST['tinggi'];
            $gambar = $_POST['gambar'];

            $i = $tinggi;
            while($i >= 1) {
                $j = $i;
                
                $spasi = $tinggi-$i;
                $s = 1;
                while ( $s <= $spasi) {
                    echo "<span style='display:inline-block; width:20px;'></span>";
                    $s++;
                }
                
                while($j >= 1) {
                    echo "<img src='$gambar' height='20' width='20'>";
                    $j--;
                }
    
                echo "<br>";
                $i--;
            }
        }
    ?>
</body>
</html>