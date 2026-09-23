<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to('/admin/foods');
        }
        return view('auth/login');
    }

    public function attemptLogin()
    {
        $session  = session();
        $userModel = new UserModel();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'userId'     => $user['id'],
                    'userName'   => $user['name'],
                    'userEmail'  => $user['email'],
                    'userRole'   => $user['role'],
                    'isLoggedIn' => true,
                ];
                $session->set($sessionData);
                return redirect()->to('/admin/foods')->with('success', 'Selamat datang kembali, ' . $user['name'] . '!');
            } else {
                return redirect()->back()->withInput()->with('error', 'Password yang Anda masukkan salah.');
            }
        } else {
            return redirect()->back()->withInput()->with('error', 'Email tidak terdaftar.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah berhasil logout.');
    }
}
