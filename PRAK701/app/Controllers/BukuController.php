<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;
use CodeIgniter\HTTP\ResponseInterface;

class BukuController extends BaseController
{

    protected  $modelBuku;

    public function __construct()
    {
        $this->modelBuku = new BukuModel();
        helper('form');
    }

    private function cekLogin()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/')->with('error', 'Login terlebih dahulu!');
        }
    }
    public function index()
    {
        if ($res = $this->cekLogin()) return $res;
        $data['buku'] = $this->modelBuku->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/form', ['buku' => null]);
    }

    public function store()
    {
        $rules = [ 
        'judul' => [
                'rules' => 'required',
                'errors' => ['required' => 'Judul harus diisi.']
            ],
            'penulis' => [
                'rules' => 'required',
                'errors' => ['required' => 'Penulis harus diisi.']
            ],
            'penerbit' => [
                'rules' => 'required',
                'errors' => ['required' => 'Penerbit harus diisi.']
            ],
            'tahun_terbit' => [
                'rules' => 'required|integer|greater_than[1800]|less_than[2024]',
                'errors' => [
                    'required' => 'Tahun terbit harus diisi.',
                    'integer' => 'Tahun terbit harus berupa angka.',
                    'greater_than' => 'Tahun harus lebih dari 1800.',
                    'less_than' => 'Tahun harus kurang dari 2024.'
                ]
            ]
    ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->modelBuku->save($this->request->getPost());
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->modelBuku->find($id);
        return view('buku/form', $data);
    }

    public function update($id)
    {
        if ($res = $this->cekLogin()) return $res;

    $rules = [ 
        'judul' => 'required',
        'penulis' => 'required',
        'penerbit' => 'required',
        'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    }

    $this->modelBuku->update($id, $this->request->getPost());
    return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->modelBuku->delete($id);
        return redirect()->to('/buku');
    }
}
