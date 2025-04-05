<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <style>
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php 
        $samsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");

        echo "<table border='1'>";
        echo "<tr><th>Daftar Smartphone Samsung</th></tr>";
        foreach ($samsung as $hp) {
            echo "<tr><td>$hp</td></tr>";
        }
        echo "</table>";           
    ?>
</body>
</html>