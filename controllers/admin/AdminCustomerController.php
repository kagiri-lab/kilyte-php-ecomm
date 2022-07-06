<?php

namespace app\controllers\admin;

use kilyte\Controller;
use kilyte\Http\Request;

class AdminCustomerController extends Controller
{

    public function adminCustomerList()
    {
        $this->setLayout('admin.main');
        return $this->render([], 'admin.ecommerce.customer.list');
    }

    public function adminCustomerDetails(Request $request)
    {
        $this->setLayout('admin.main');
        return $this->render([
            "customerID" => $request->getRouteParam('id')
        ], 'admin.ecommerce.customer.details');
    }
}
