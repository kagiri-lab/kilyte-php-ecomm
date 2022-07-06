<?php

namespace app\controllers\admin;

use kilyte\Controller;

class AuthController extends Controller
{

    public function login()
    {
        $this->setLayout('admin.auth');
        return $this->render([], 'admin.auth.login');
    }

    public function register()
    {
        $this->setLayout('admin.auth');
        return $this->render([], 'admin.auth.register');
    }

    public function resetPassword()
    {
        $this->setLayout('admin.auth');
        return $this->render([], 'admin.auth.reset-password');
    }

    public function forgotPassword()
    {
        $this->setLayout('admin.auth');
        return $this->render([], 'admin.auth.forgot-password');
    }

    public function confirmEmail()
    {
        $this->setLayout('admin.auth');
        return $this->render([], 'admin.auth.confirm-email');
    }

    public function logout()
    {
        $this->setLayout('admin.auth');
        return $this->render([], 'admin.auth.logout');
    }
}
