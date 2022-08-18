<?php

namespace app\controllers\admin;

use kilyte\Controller;

class ProductsController extends Controller
{
    public function productsList()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.product.list');
    }

    public function productDetails()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.product.details');
    }

    public function productRegister()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.product.register');
    }

    
}
