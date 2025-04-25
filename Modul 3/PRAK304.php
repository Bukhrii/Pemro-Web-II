<?php 
    $jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;

    if(isset($_POST['tambah'])) {
        $jumlah++;
    } elseif(isset($_POST['kurang']) && $jumlah > 0) {
        $jumlah--;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Jumlah Bintang <input type="text" name="jumlah" value="<?= $jumlah ?>"><br>
        <button type="submit" name="submit">Submit</button><br>
        <?php
        $i = 0;
        echo "Jumlah bintang $jumlah <br>"; 
        do {
            if ($jumlah <= 0) {break;}
                echo "<img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' width='70'>";
            $i++;
        } while($i < $jumlah);
        ?>
        <br>
        <?php 
        if((isset($_POST['submit']) || isset($_POST['tambah']) || isset($_POST['kurang'])) && $jumlah > 0) {
        echo "<button type='submit' name='tambah'>Tambah</button><button type='submit' name='kurang'>Kurang</button>";
        } ?>
    </form>

        
    
</body>
</html>
