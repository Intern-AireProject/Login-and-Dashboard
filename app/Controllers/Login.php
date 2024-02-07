<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        
        return view ('page-login');
        
    }

    public function processLogin()
    {

        $email = $this->request->getPost('email');
        $password = $this->request->getPost ('password');

        $storedEmail = 'syaifu@gmail.com';
        $storedPassword = '12345678';

        // Implementasi autentikasi disini, misalnya dengan memeriksa dari database
        if ($email == $storedEmail && $password == $storedPassword) {
            return redirect()->to('/page-dashboard');
        } else {
            // Jika login gagal, mungkin tampilkan pesan error atau lakukan tindakan lain
            echo "Login failed. Please check your username and password.";
        }
        
    }
}
