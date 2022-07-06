<?php

namespace app\controllers\shop;

use kilyte\Controller;
use kilyte\Http\Request;

class ShopItemController extends Controller
{

    public function shopItem(Request $request)
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
}
