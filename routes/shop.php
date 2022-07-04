<?php

namespace app\routes;

use app\controllers\ShopController;
use kilyte\Application;

class Shop
{

    public function __construct(Application $application)
    {
        $this->route($application->router);
    }

    public function route($route)
    {
        $route->get(ShopController::class, [
            '/' => 'shopIndex',
            '/my-account' => 'shopMyAccount',
            '/contact' => 'shopContact',
            '/about' => 'shopAbout',
            '/faq' => 'shopFaq',
            '/privacy-policy' => 'shopPrivacy',
            '/terms-conditions' => 'shopTerms',
            '/category/{name}' => 'shopCategory',
            '/product/{item}' => 'shopItem',
            '/product/wish-list' => 'shopWishlist',
            '/shopping-cart' => 'shopCart',
            '/checkout' => 'shopCheckout'
        ]);
    }
}
