<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Batas Bawah : <input type="text" name="batasbawah"><br>
        Batas Atas : <input type="text" name="batasatas"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php 
    if(isset($_POST['submit'])) {
        $bbawah = $_POST['batasbawah'];
        $batas = $_POST['batasatas'];
        do {
            if(($bbawah + 7) % 5 == 0) {
                echo "<img src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' width=20' height'20'> ";
            } else {
                echo "$bbawah ";
            }
            $bbawah++;
        }
        while($bbawah <= $batas);
    }
        
    ?>
</body>
</html>