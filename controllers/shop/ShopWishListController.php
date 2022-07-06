<?php

namespace app\controllers\shop;

use kilyte\Controller;

class ShopWishListController extends Controller
{

    public function shopWishlist()
    {
        $this->setLayout('shop.sub');
        return $this->render(
            [],
            'shop.products.wishlist'
        );
    }
}
