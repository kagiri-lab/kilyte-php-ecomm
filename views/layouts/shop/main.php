<!doctype html>
<html class="no-js" lang="zxx">

<?php

use app\controllers\menu\MobileMenu;
use app\controllers\menu\StickyMenu;

$mainmenu = new StickyMenu;

require('header.php'); ?>

<body>

    <?php require('preloader.php') ?>

    <!-- Top Bar -->
    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <div class="top-left d-flex">
                        <div class="lang-box">
                            <span><img src="assets/shop/images/fl-eng.png" alt="">English<i class="fa fa-angle-down"></i></span>
                            <ul class="list-unstyled">
                                <li><img src="assets/shop/images/fl-eng.png" alt="">English</li>
                            </ul>
                        </div>
                        <div class="mny-box">
                            <span>KSH<i class="fa fa-angle-down"></i></span>
                            <ul class="list-unstyled">
                                <li>USD</li>
                                <li>GBP</li>
                                <li>EUR</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="top-right text-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href=""><img src="assets/shop/images/user.png" alt="">My Account</a></li>
                            <li class="list-inline-item"><a href=""><img src="assets/shop/images/wishlist.png" alt="">Wishlist</a></li>
                            <li class="list-inline-item"><a href=""><img src="assets/shop/images/checkout.png" alt="">Checkout</a></li>
                            <li class="list-inline-item"><a href=""><img src="assets/shop/images/login.png" alt="">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Top Bar -->

    <!-- Logo Area -->
    <section class="logo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="/"><img src="assets/shop/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-5 padding-fix">
                    <form action="#" class="search-bar">
                        <input type="text" name="search-bar" placeholder="I'm looking for...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="carts-area d-flex">
                        <div class="call-box d-flex">
                            <div class="call-ico">
                                <img src="assets/shop/images/call.png" alt="">
                            </div>
                            <div class="call-content">
                                <span>Call Us</span>
                                <p>+1 (111) 426 6573</p>
                            </div>
                        </div>
                        <div class="cart-box ml-auto text-center">
                            <a href="" class="cart-btn">
                                <img src="assets/shop/images/cart.png" alt="cart">
                                <span>2</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Logo Area -->

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
    <!-- End Sticky Menu -->

    <!-- Menu Area -->
    <section class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="/">HOME</a></li>

                            <?php $mainmenu->load(); ?>
                            <li class="list-inline-item trac-btn"><a href="">Track Your Order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Menu Area -->

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