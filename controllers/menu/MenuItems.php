<?php

namespace app\controllers\menu;

class MenuItems
{

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
            "About" => "/about",
            "Contacts" => "/contact",
            "More" => [
                "FAQ" => "/faq",
                "Terms &amp; Conditions" => "/terms-conditions"
            ]
        ];
    }


    public function categoryMenu()
    {

        return [
            "Shoes" => "/product/shoes",
            "Dress" => "/product/dress",
            "Men" => "",
            "Women" => "",
            "Kids" => "",
            "AutoMobiles" => "",
            "Men -" => "",
            "Women -" => "",
            "Kids -" => "",
            "AutoMobiles -" => "",
            "Men - 1" => "",
            "Women - " => "",
            "Kids - " => "",
            "AutoMobiles - " => ""
        ];
    }


    public function adminMenu()
    {
        return [
            "Orders" => "/admin/order/list",
            "Products" => [
                "List" => "/admin/product/list",
                "Register" => "/admin/product/register"
            ],
            "Customers" => "/admin/customer/list",
            "User" => [
                "Login" => "/admin/login",
                "Register" => "/admin/register"
            ]
        ];
    }
}
