<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <style>
        th {
            background-color:rgb(255, 0, 0);
        }
    </style>
</head>
<body>
    <?php 
        $samsung = array("S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+", "A03" => "Samsung Galaxy A03", "Xcover5" => "Samsung Galaxy Xcover 5");
        
        echo "<table border='1'>";
        echo "<tr><th><h3>Daftar Smartphone Samsung</h3></th></tr>";
        
        echo "<tr><td>" . $samsung["S22"] . "</td></tr>";
        echo "<tr><td>" . $samsung["S22+"] . "</td></tr>";
        echo "<tr><td>" . $samsung["A03"] . "</td></tr>";
        echo "<tr><td>" . $samsung["Xcover5"] . "</td></tr>";
    ?>
</body>
</html>