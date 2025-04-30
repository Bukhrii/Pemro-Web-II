<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, th {
            padding: 10px;
        }
        table {
            border-collapse: collapse;
        }
        th {
          background-color  : lightgray;
        }
    </style>
</head>
<body>
        <table border="1px">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
        <?php 
            $mahasiswa = [
                "mhs1" => [
                    "Nama" => "Andi",
                    "NIM" => "2101001",
                    "Nilai UTS" => 87,
                    "Nilai UAS" => 65
                ],
                "mhs2" => [
                    "Nama" => "Budi",
                    "NIM" => "2101002",
                    "Nilai UTS" => 76,
                    "Nilai UAS" => 79
                ],
                "mhs3" => [
                    "Nama" => "Tono",
                    "NIM" => "2101003",
                    "Nilai UTS" => 50,
                    "Nilai UAS" => 41
                ],
                "mhs4" => [
                    "Nama" => "Jessica",
                    "NIM" => "2101004",
                    "Nilai UTS" => 60,
                    "Nilai UAS" => 75
                ],
            ];
            foreach ($mahasiswa as $data) {
                $nilaiAkhir = $data['Nilai UTS'] * 0.4 + $data['Nilai UAS'] * 0.6;
                if($nilaiAkhir >= 80) {
                    $huruf = "A";
                } elseif($nilaiAkhir < 80 && $nilaiAkhir > 69) {
                    $huruf = "B";
                } elseif($nilaiAkhir < 70 && $nilaiAkhir > 59) {
                    $huruf = "C";
                } elseif($nilaiAkhir < 60 && $nilaiAkhir > 49) {
                    $huruf = "D";
                } else {
                    $huruf = "E";
                };

                echo "<tr>";
                echo "<td>" . $data['Nama'] . "</td>";
                echo "<td>" . $data['NIM'] . "</td>";
                echo "<td>" . $data['Nilai UTS'] . "</td>";
                echo "<td>" . $data['Nilai UAS'] . "</td>";
                echo "<td>" . $nilaiAkhir . "</td>";
                echo "<td>" . $huruf . "</td>";
                echo "</tr>";
            }
        ?>
        </table>

</body>
</html>
