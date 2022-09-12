<?php

namespace app\routes;

use app\controllers\admin\AdminController;
use app\controllers\admin\AuthController;
use app\controllers\admin\CustomersController;
use app\controllers\admin\ImportController;
use app\controllers\admin\OrdersController;
use app\controllers\admin\PartCatalogController;
use app\controllers\admin\ProductsController;
use app\controllers\admin\QueryController;
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
            '/' => 'index'
        ], 'admin');

        $route->get(AuthController::class, [
            '/login' => 'login',
            '/register' => 'register',
            '/logout' => 'logout',
            '/forgot-password' => 'forgotPassword',
            '/reset-password' => 'resetPassword',
            '/confirm-email' => 'confirmEmail'
        ], 'admin');

        $route->get(OrdersController::class, [
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

        $route->get(QueryController::class, [
            '/query/{vehicle}' => 'queryVehicle',
            '/query/task/{vehicle}/{task}' => 'queryTask',
            '/query/vehicle/list' => 'listQueries'
        ], 'admin');

        $route->post(QueryController::class, [
            '/query/vehicle/list' => 'listQueries'
        ], 'admin');

        $route->get(ImportController::class, [
            '/import/products' => 'importCsv',
            '/update/stock' => 'readCsv'
        ], 'admin');

        $route->post(ImportController::class, [
            '/import/products' => 'importCsv'
        ], 'admin');

        $route->get(PartCatalogController::class, [
            '/import/catalog' => 'import',
            '/catalog/list' => 'partCatalog',
        ], 'admin');
    }
}
