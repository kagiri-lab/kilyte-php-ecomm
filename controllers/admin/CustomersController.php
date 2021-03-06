<?php

namespace app\controllers\admin;

use kilyte\Controller;
use kilyte\Http\Request;

class CustomersController extends Controller
{

    public function customersList()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.customer.list');
    }

    public function customerDetails(Request $request)
    {
        $this->setLayout('admin.main');
        return $this->render([
            "customerID" => $request->getRouteParam('id')
        ], 'admin.ecommerce.customer.details');
    }
}
