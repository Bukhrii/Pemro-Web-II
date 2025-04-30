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
        .revisi {
            background-color: red;
        }
        .tidakRevisi {
          background-color  : green;
        }
    </style>
</head>
<body>
        <table border="1px">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
        <?php 
            $mahasiswa = [
                "mhs1" => [
                    "No" => "1",
                    "Nama" => "Ridho",
                    "Mata Kuliah diambil" => [
                        ["nama" => "Pemrograman I", "sks" => "2"], 
                        ["nama" => "Praktikum Pemrograman I", "sks" => "1"], 
                        ["nama" => "Pengantar Lingkungan Lahan Basah", "sks" => "2"], 
                        ["nama" => "Arsitektur Komputer", "sks" => "3"]
                    ]
                ],
                "mhs2" => [
                    "No" => "2",
                    "Nama" => "Ratna",
                    "Mata Kuliah diambil" => [
                        ["nama" => "Basis Data I", "sks" => "2"],
                        ["nama" => "Praktikum Basis Data I", "sks" => "1"],
                        ["nama" => "Kalkulus", "sks" => "3"]
                    ]
                ],
                "mhs3" => [
                    "No" => "3",
                    "Nama" => "Tono",
                    "Mata Kuliah diambil" => [
                        ["nama" => "Rekaya Perangkat Lunak", "sks" => "3"], 
                        ["nama" => "Analisis dan Perancangan Sistem", "sks" => "3"], 
                        ["nama" => "Komputasi Awan", "sks" => "3"],
                        ["nama" => "Kecerdasan Bisnis", "sks" => "3"]
                    ]
                ]
            ];

            foreach ($mahasiswa as $key => $data) {
                $jumlahSks = 0;
                $jumlahMataKuliah = count($data['Mata Kuliah diambil']);

                foreach ($data["Mata Kuliah diambil"] as $mk) {
                    $jumlahSks += $mk['sks'];
                }

                if($jumlahSks < 7) {
                    $keterangan = "<td rowspan='$jumlahMataKuliah' class='revisi'>Revisi KRS</td>";
                } else {
                    $keterangan = "<td rowspan='$jumlahMataKuliah' class='tidakRevisi'>Tidak Revisi</td>";
                }

                $first = true;

                foreach($data['Mata Kuliah diambil'] as $mataKuliah) {
                    echo "<tr>";
                    if($first) {
                        echo "<td rowspan='$jumlahMataKuliah'>" . $data['No'] . "</td>";
                        echo "<td rowspan='$jumlahMataKuliah'>" . $data['Nama'] . "</td>";
                    }

                    echo "<td>" . $mataKuliah['nama'] . "</td>";
                    echo "<td>" . $mataKuliah['sks'] . "</td>";
                    

                    if ($first) {
                        echo "<td rowspan='$jumlahMataKuliah'>" . $jumlahSks . "</td>";
                        echo "$keterangan";
                        $first = false;
                    }
                    echo "</tr>";
                }
            }
        ?>
        </table>

</body>
</html>
