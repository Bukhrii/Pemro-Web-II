<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            padding: 10px;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        Panjang : <input type="text" name="panjang"><br>
        Lebar : <input type="text" name="lebar"><br>
        Nilai : <input type="text" name="nilai"><br>
        <button type="submit" name="cetak">cetak</button><br>
        <table border="1px">
        <?php 
            if(isset($_POST['cetak'])) {
                $panjang = $_POST['panjang'];
                $lebar = $_POST['lebar'];
                $nilaimatrix = explode(" ", $_POST['nilai']);
                
                $indeks = 0;
                if(count($nilaimatrix) <= $panjang * $lebar) {
                    for($i = 0; $i < $panjang; $i++) {
                        echo "<tr>";
                            for($j = 0; $j < $lebar; $j++) {
                                if (isset($nilaimatrix[$indeks])) {
                                    echo "<td>$nilaimatrix[$indeks]</td>";
                                    $indeks++;
                                } else {
                                    echo "<td>&nbsp;</td>";
                                }                                
                            }
                        echo "</tr>";
                    }
                }
                else {
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                }
            }
        ?>
        </table>
    </form>

</body>
</html>
