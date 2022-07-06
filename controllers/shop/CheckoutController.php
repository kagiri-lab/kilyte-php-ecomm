<?php

namespace app\controllers\shop;

use kilyte\Controller;

class CheckoutController extends Controller
{
    public function shopCheckout()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.products.checkout');
    }
}
