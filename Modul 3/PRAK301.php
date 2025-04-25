<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .genap {
            color: green
        }
        .ganjil {
            color: red
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Jumlah Peserta: <input type="text" name="peserta"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>

    <?php 
            if(isset($_POST['submit'])) {
                $jumlah = $_POST['peserta'];
                $i = 1;
                while($i <= $jumlah ) {
                    if($i % 2 == 0) {
                        echo "<h1 class='genap'>Peserta ke-$i</h1>";
                    } else {
                        echo "<h1 class='ganjil'>Peserta ke-$i</h1>";
                    }
                    $i++;
                }
            }
        ?>
</body>
</html>