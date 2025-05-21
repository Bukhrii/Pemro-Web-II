<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index() {
        return view('login/index');
    }
    public function Auth() {

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        if($user) {
            if (password_verify($password, $user['password'])) {
                session()->set([
                    'username' => $user['username'],
                    'logged_in' => true
                ]);
                return redirect()->to('/buku');
            }
            else {return redirect()->back()->with('error', 'password yang anda masukkan salah!');}
        } 
        else {return redirect()->back()->with('error', 'username tidak ditemukan!');}
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/')->with('pesan', 'Anda telah logout.');
    }
}
