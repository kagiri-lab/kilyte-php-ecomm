<?php

namespace app\routes;

use app\controllers\shop\AuthController;
use app\controllers\shop\CartController;
use app\controllers\shop\CategoryController;
use app\controllers\shop\CheckoutController;
use app\controllers\shop\ProductsController;
use app\controllers\shop\ShopController;
use app\controllers\shop\WishListController;
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

        //     
        //     
        // ]);

        $route->get(ShopController::class, [
            '/' => 'shopIndex',
            '/about' => 'shopAbout',
            '/contact' => 'shopContact',
            '/faq' => 'shopFaq',
            '/privacy-policy' => 'shopPrivacy',
            '/terms-conditions' => 'shopTerms'
        ]);

        $route->get(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register'
        ]);

        $route->get(AuthController::class, [
            'my-account' => 'myAccount'
        ], '/', 'auth');

        $route->get(CartController::class, [
            '/shopping-cart' => 'shopCart'
        ]);

        $route->get(WishListController::class, [
            '/wish-list' => 'shopWishlist',
        ]);

        $route->get(CheckoutController::class, [
            '/checkout' => 'shopCheckout'
        ]);

        $route->get(ProductsController::class, [
            '/category/{name}' => 'category',
            '/product/{item}' => 'product',
        ]);
    }
}
