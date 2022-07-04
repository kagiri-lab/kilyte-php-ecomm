<?php

namespace app\controllers;

use kilyte\Controller;
use kilyte\Http\Request;

class ShopController extends Controller
{

    public function shopIndex()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.index');
    }

    public function shopAbout()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.about');
    }

    public function shopContact()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.contacts');
    }

    public function shopFaq()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.faq');
    }

    public function shopPrivacy()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.privacy-policy');
    }

    public function shopTerms()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.terms-conditions');
    }

    public function shopCategory(Request $request)
    {
        $category = $request->getRouteParam('name');
        $this->setLayout('shop.main');
        return $this->render([
            'category' => $category,
            'filter' => true
        ], 'shop.products.product-list');
    }

    public function shopItem(Request $request)
    {
        $item = $request->getRouteParam('item');
        $this->setLayout('shop.main');
        return $this->render(
            [
                'item' => $item,
                'filter' => true
            ],
            'shop.products.item'
        );
    }

    public function shopWishlist()
    {
        $this->setLayout('shop.main');
        return $this->render(
            [],
            'shop.products.wishlist'
        );
    }

    public function shopCart()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.products.shopping-cart');
    }

    public function shopCheckout()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.products.checkout');
    }

    public function shopMyAccount()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.account');
    }

    
}
