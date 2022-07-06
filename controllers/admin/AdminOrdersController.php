<?php

namespace app\controllers\admin;

use kilyte\Controller;
use kilyte\Http\Request;

class AdminOrdersController extends Controller
{

    public function adminOrderDetails(Request $request)
    {
        $this->setLayout('admin.main');
        return $this->render([
            'order' => $request->getRouteParam('number')
        ], 'admin.ecommerce.orders.details');
    }

    public function adminOrderList()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.orders.list');
    }
}
