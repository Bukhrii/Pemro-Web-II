<?php

namespace App\Models;

use CodeIgniter\Model;

class Mahasiswa extends Model
{
    public function getData()
    {
        return [
            'nama' => 'Muhammad Bukhari Fitri',
            'nim' => '2310817210015',
            'asal_prodi' => 'Teknologi Informasi',
            'hobi' => 'Tidur',
            'skill' => 'Fotografi',
            'gambar' => '../img/me.jpg'
        ];
    }
}

?>