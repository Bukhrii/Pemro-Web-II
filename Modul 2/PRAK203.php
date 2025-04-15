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
        Dari :<br>
        <input type="radio" name="from" value="Celsius">Celsius<br>
        <input type="radio" name="from" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="from" value="Rheamur">Rheamur<br>
        <input type="radio" name="from" value="Kelvin">Kelvin<br>
        Ke :<br>
        <input type="radio" name="to" value="Celsius">Celsius<br>
        <input type="radio" name="to" value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="to" value="Rheamur">Rheamur<br>
        <input type="radio" name="to" value="Kelvin">Kelvin<br>
        <button type="submit" name="konversi">konversi</button><br>
        <h1><?php 
                if(isset($_POST['konversi'])){
                    $nilai = $_POST['nilai'];
                    $from = $_POST['from'];
                    $to = $_POST['to'];
                    if($to == "Celsius") {
                        if($from == "Fahrenheit") {
                            $hasil = ($nilai - 32) * 5/9;
                        } elseif ($from == "Rheamur") {
                            $hasil = $nilai * 5/4;
                        } elseif ($from == "Kelvin") {
                            $hasil = $nilai - 273.15;
                        } else {
                            echo "Pilih konversi yang benar!";
                        } echo "Hasil Konversi: " . $hasil. " °C";
                    } elseif($to == "Fahrenheit") {
                        if($from == "Celsius") {
                            $hasil = ($nilai * 9/5) + 32;
                        } elseif ($from == "Rheamur") {
                            $hasil = ($nilai * 9/4) + 32;
                        } elseif ($from == "Kelvin") {
                            $hasil = ($nilai - 273.15) * 9/5 + 32;
                        } else {
                            echo "Pilih konversi yang benar!";
                        } echo "Hasil Konversi: " . $hasil. " °F";
                    } elseif($to == "Rheamur") {
                        if($from == "Celsius") {
                            $hasil = $nilai * 4/5;
                        } elseif ($from == "Fahrenheit") {
                            $hasil = ($nilai - 32) * 4/9;
                        } elseif ($from == "Kelvin") {
                            $hasil = ($nilai - 273.15) * 4/5;
                        } else {
                            echo "Pilih konversi yang benar!";
                        } echo "Hasil Konversi: " . $hasil. " °Re";
                    } elseif($to == "Kelvin") {
                        if($from == "Celsius") {
                            $hasil = $nilai + 273.15;
                        } elseif ($from == "Fahrenheit") {
                            $hasil = ($nilai - 32) * 5/9 + 273.15;
                        } elseif ($from == "Rheamur") {
                            $hasil = ($nilai * 5/4) + 273.15;
                        } else {
                            echo "Pilih konversi yang benar!";
                        } echo "Hasil Konversi: " . $hasil. " °K";
                    } else {
                        echo "Pilih konversi yang benar!";
                    }
                }
            ?>
        </h1>
    </form>
</body>
   
</html>