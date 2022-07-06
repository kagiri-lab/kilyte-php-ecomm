<?php

namespace app\routes;

use app\controllers\admin\AdminController;
use app\controllers\admin\AuthController;
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
            '/register' => 'adminRegister',
            '/logout' => 'adminLogout',
            '/forgot-password' => 'adminForgotPassword',
            '/reset-password' => 'adminResetPassword',
            '/confirm-email' => 'adminConfirmEmail'
        ], 'admin');

        // $route->get(AdminOrdersController::class, [
        //     '/order/get/{number}' => 'adminOrderDetails',
        //     '/order/list' => 'adminOrderList'
        // ], 'admin');

        // $route->get(AdminProductController::class, [
        //     '/product/list' => 'adminProductList',
        //     '/product/register' => 'adminProductRegister',
        //     '/product/get/{number}' => 'adminProductDetails'
        // ], 'admin');

        // $route->get(AdminCustomerController::class, [
        //     '/customer/get/{id}' => 'adminCustomerDetails',
        //     '/customer/list' => 'adminCustomerList'
        // ], 'admin');
    }
}
