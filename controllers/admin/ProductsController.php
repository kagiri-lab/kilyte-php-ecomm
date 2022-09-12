<?php

namespace app\controllers\admin;

use app\models\Stock;
use kilyte\Controller;

class ProductsController extends Controller
{
    public function productsList()
    {
        $stock = Stock::getAll();
        $this->setLayout('admin.main');
        return $this->render([
            'parts' => $stock
        ], 'admin.ecommerce.product.parts');
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
