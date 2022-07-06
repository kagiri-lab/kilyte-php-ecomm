<?php

namespace app\controllers\shop;

use kilyte\Controller;
use kilyte\Http\Request;

class ProductsController extends Controller{

    public function product(Request $request)
    {
        $item = $request->getRouteParam('item');
        $this->setLayout('shop.sub');
        return $this->render(
            [
                'item' => $item,
                'filter' => true
            ],
            'shop.products.single-product'
        );
    }


    public function category(Request $request)
    {
        $category = $request->getRouteParam('name');
        $this->setLayout('shop.sub');
        return $this->render([
            'category' => $category,
            'filter' => true
        ], 'shop.products.category');
    }
}