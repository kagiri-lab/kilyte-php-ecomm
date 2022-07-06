<?php

namespace app\routes;

use app\controllers\shop\AuthController;
use app\controllers\shop\ShopController;
use kilyte\Application;

class Shop
{

    public function __construct(Application $application)
    {
        $this->route($application->router);
    }

    public function route($route)
    {
        // $route->get(ShopController::class, [
        //     '/' => 'shopIndex',
        //     '/my-account' => 'shopMyAccount',
        //     '/login' => 'shopLogin',
        //     '/register' => 'shopRegister',
        //     '/contact' => 'shopContact',
        //     '/about' => 'shopAbout',
        //     '/faq' => 'shopFaq',
        //     '/privacy-policy' => 'shopPrivacy',
        //     '/terms-conditions' => 'shopTerms',
        //     '/category/{name}' => 'shopCategory',
        //     '/product/{item}' => 'shopItem',
        //     '/wish-list' => 'shopWishlist',
        //     '/shopping-cart' => 'shopCart',
        //     '/checkout' => 'shopCheckout'
        // ]);

        $route->get(ShopController::class, [
            '/' => 'shopIndex'
        ]);

        $route->get(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register'
        ]);

        $route->get(AuthController::class, [
            'account' => 'myAccount'
        ], '/', 'auth');

    }
}
