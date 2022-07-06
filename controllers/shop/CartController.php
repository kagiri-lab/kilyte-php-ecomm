<?php

namespace app\controllers\shop;

use kilyte\Controller;

class CartController extends Controller
{

    public function shopCart()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.products.shopping-cart');
    }
}
