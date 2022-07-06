<!doctype html>
<html class="no-js" lang="zxx">

<?php

use app\controllers\menu\CategoryMenu;
use app\controllers\menu\MobileMenu;
use app\controllers\menu\StickyMenu;

$mainmenu = new StickyMenu;

require('header.php') ?>

<body>

    <?php require('preloader.php') ?>

    <!-- Top Bar 2 -->
    <section class="top-bar2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-left d-flex">
                        <div class="lang-box">
                            <span><img src="assets/shop/images/fl-eng.png" alt="">English<i class="fa fa-angle-down"></i></span>
                            <ul class="list-unstyled">
                                <li><img src="assets/shop/images/fl-eng.png" alt="">English</li>
                                <li><img src="assets/shop/images/fl-fra.png" alt="">French</li>
                                <li><img src="assets/shop/images/fl-ger.png" alt="">German</li>
                                <li><img src="assets/shop/images/fl-bra.png" alt="">Brazilian</li>
                            </ul>
                        </div>
                        <div class="mny-box">
                            <span>USD<i class="fa fa-angle-down"></i></span>
                            <ul class="list-unstyled">
                                <li>USD</li>
                                <li>GBP</li>
                                <li>EUR</li>
                            </ul>
                        </div>
                        <div class="call-us">
                            <p><img src="assets/shop/images/phn.png" alt="">+1 (111) 426 6573</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-right text-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="/my-account"><img src="assets/shop/images/user.png" alt="">My Account</a></li>
                            <li class="list-inline-item"><a href="/wish-list"><img src="assets/shop/images/wishlist.png" alt="">Wishlist</a></li>
                            <li class="list-inline-item"><a href="/checkout"><img src="assets/shop/images/checkout.png" alt="">Checkout</a></li>
                            <li class="list-inline-item"><a href="/login"><img src="assets/shop/images/login.png" alt="">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar 2 -->

    <!-- Logo Area 2 -->
    <section class="logo-area2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="/"><img src="assets/shop/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 padding-fix">
                    <form action="#" class="search-bar d-flex">
                        <input type="text" name="search-bar" placeholder="I'm looking for...">
                        <div class="search-cat">
                            <select class="form-control scat-id">
                                <option>All Categories</option>
                                <option>Category One</option>
                                <option>Category Two</option>
                                <option>Category Three</option>
                                <option>Category Four</option>
                                <option>Category Five</option>
                                <option>Category Six</option>
                                <option>Category Seven</option>
                            </select>
                        </div>
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-2">
                    <div class="carts-area d-flex">
                        <div class="wsh-box ml-auto">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                <img src="assets/shop/images/heart.png" alt="favorite">
                                <span>0</span>
                            </a>
                        </div>
                        <div class="cart-box ml-4">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                                <img src="assets/shop/images/cart.png" alt="cart">
                                <span>2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area 2 -->

    <?php require('cart.php') ?>

    <!-- Sticky Menu -->
    <section class="sticky-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="sticky-logo">
                        <a href="/"><img src="assets/shop/images/logo.png" alt="" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="/">HOME</a></li>
                            <?php $mainmenu->load(); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-2">
                    <div class="carts-area d-flex">
                        <div class="src-box">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search Here">
                                <button type="button" name="button"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="wsh-box ml-auto">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Wishlist">
                                <img src="/assets/shop/images/heart.png" alt="favorite">
                                <span>0</span>
                            </a>
                        </div>
                        <div class="cart-box ml-4">
                            <a href="" data-toggle="tooltip" data-placement="top" title="Shopping Cart" class="cart-btn">
                                <img src="/assets/shop/images/cart.png" alt="cart">
                                <span>2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sticky Menu -->

    <!-- Menu Area 2 -->
    <section class="menu-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-0">
                    <div class="sidemenu">
                        <p>All Categories <i class="fa fa-bars"></i></p>
                        <ul class="list-unstyled gt-menu">
                            <?php

                            $categoryMenu = new CategoryMenu;
                            $categoryMenu->load();
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="/">HOME </a></li>
                            <?php $mainmenu->load(); ?>
                            <li class="list-inline-item cup-btn"><a href="">Get Your Coupon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Area 2 -->

    <!-- Mobile Menu -->
    <section class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <a href="/"><img src="assets/shop/images/logo.png" alt=""></a>
                            <a href="/login"><span>Sign In</span></a>
                            <ul class="list-unstyled">
                                <li><a href="/">Home</a></li>
                                <?php
                                $mobileMenu = new MobileMenu;
                                $mobileMenu->load();
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Mobile Menu -->

    {{content}}

    <?php require('footer.php'); ?>

</body>

</html>