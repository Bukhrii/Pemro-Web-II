<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="string">
        <button type="submit" name="submit">Submit</button><br>
    </form>

        <?php 
            if(isset($_POST['submit']) && isset($_POST['string'])) {
                $string =$_POST['string'];

                echo "<h3>Input:</h3>$string<br>";
                echo "<h3>Output:</h3>";

                for($i = 0; $i < strlen($string); $i++) {
                    for($j = 0; $j < strlen($string); $j++) {
                        $upper = strtoupper($string[$i]);
                        $lower = strtolower($string[$i]);
                        if($j == 0) {
                            echo "$upper";
                        } else {
                            echo "$lower";
                        }
                    }
                }
            }
        ?>
    
</body>
</html>
