<?php

namespace app\controllers\admin;

use kilyte\Controller;
use kilyte\Http\Request;

class OrdersController extends Controller
{

    public function orderDetails(Request $request)
    {
        $this->setLayout('admin.main');
        return $this->render([
            'order' => $request->getRouteParam('number')
        ], 'admin.ecommerce.orders.details');
    }

    public function orderList()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.orders.list');
    }
}
