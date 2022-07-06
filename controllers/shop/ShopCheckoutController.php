<?php

namespace app\controllers\shop;

use kilyte\Controller;

class ShopCheckoutController extends Controller
{
    public function shopCheckout()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.products.checkout');
    }
}
