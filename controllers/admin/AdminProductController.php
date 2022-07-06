<?php

namespace app\controllers\admin;

use kilyte\Controller;

class AdminProductController extends Controller
{
    public function adminProductList()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.product.list');
    }

    public function adminProductDetails()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.product.details');
    }

    public function adminProductRegister()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.product.register');
    }
}
