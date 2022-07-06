<?php

namespace app\routes;

use app\controllers\admin\AdminController;
use app\controllers\admin\AuthController;
use app\controllers\admin\CustomersController;
use app\controllers\admin\OrdersController;
use app\controllers\admin\ProductsController;
use kilyte\Application;

class Admin
{


    public function __construct(Application $application)
    {
        $this->route($application->router);
    }

    public function route($route)
    {
        $route->get(AdminController::class, [
            '/' => 'index',
        ], 'admin');

        $route->get(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register',
            '/logout' => 'logout',
            '/forgot-password' => 'forgotPassword',
            '/reset-password' => 'resetPassword',
            '/confirm-email' => 'confirmEmail'
        ], 'admin');

        $route->get(OrdersController ::class, [
            '/order/get/{number}' => 'orderDetails',
            '/order/list' => 'orderList'
        ], 'admin');

        $route->get(ProductsController::class, [
            '/product/list' => 'productsList',
            '/product/register' => 'productRegister',
            '/product/get/{number}' => 'productDetails'
        ], 'admin');

        $route->get(CustomersController::class, [
            '/customer/get/{id}' => 'customerDetails',
            '/customer/list' => 'customersList'
        ], 'admin');
    }
}
