<?php

namespace app\controllers\menu;

class MenuItems{

    public function mainMenuBarItems()
    {
        return [
            "Category" => [
                "Kids" => "/product/kids",
                "Men" => "/product/men",
                "Ladies" => [
                    "Dress" => "/product/dress",
                    "Shoes" => "/product/shoes"
                ]
            ],
            "New" => "/product/new",
            "More" => [
                "About" => "/about",
                "Contacts" => "/contact",
                "FAQ" => "/faq",
                "Privacy Policy" => "/privacy-policy",
                "Terms &amp; Conditions" => "/terms-conditions"
            ]
        ];
    }


    public function leftSideBarItems()
    {
        return [
            "Ladies" => [],
            "Men" => [
                "Shoes" => [
                    "Classic" => [],
                    "Sport" => [
                        "Sport 1" => [],
                        "Sport 2" => []
                    ]
                ],
                "Trainers" => null
            ],
            "Kids" => null
        ];
    }

    
}