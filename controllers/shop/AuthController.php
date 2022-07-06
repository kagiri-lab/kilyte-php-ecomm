<?php

namespace app\controllers\shop;

use kilyte\Controller;

class AuthController extends Controller
{
    public function myAccount()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.account');
    }

    public function login()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.login');
    }

    public function register()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.register');
    }
}
