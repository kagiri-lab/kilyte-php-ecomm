<?php

namespace app\controllers\shop;

use kilyte\Controller;

class ShopController extends Controller
{
    public function shopIndex()
    {
        $this->setLayout('shop.main');
        return $this->render([], 'shop.index');
    }

    public function shopAbout()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.about');
    }

    public function shopContact()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.contacts');
    }

    public function shopFaq()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.faq');
    }

    public function shopPrivacy()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.privacy-policy');
    }

    public function shopTerms()
    {
        $this->setLayout('shop.sub');
        return $this->render([], 'shop.terms-conditions');
    }
}
