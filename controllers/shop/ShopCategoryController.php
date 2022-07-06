<?php

namespace app\controllers\shop;

use kilyte\Controller;
use kilyte\Http\Request;

class ShopCategoryController extends Controller
{

    public function shopCategory(Request $request)
    {
        $category = $request->getRouteParam('name');
        $this->setLayout('shop.sub');
        return $this->render([
            'category' => $category,
            'filter' => true
        ], 'shop.products.category');
    }
}
