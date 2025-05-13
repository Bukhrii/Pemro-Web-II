<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class Page extends BaseController
{
    public function beranda()
    {
        $model = new Mahasiswa();
        $data['mahasiswa'] = $model->getData();
        $data['title'] = 'Beranda'; 
        return view('pages/beranda', $data);
    }

    public function profil()
    {
        $model = new Mahasiswa();
        $data['mahasiswa'] = $model->getData();
        $data['title'] = 'Profil';
        return view('pages/profil', $data);
    }
}
