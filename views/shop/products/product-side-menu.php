<?php

use app\controllers\menu\LeftSideBarController;

?>
<div class="sidebar col-md-3 col-sm-5">

    <?php

    $leftsidebar = new LeftSideBarController;
    $leftsidebar->load();

    if (isset($filter) && $filter == true) { ?>
        <div class="sidebar-filter margin-bottom-25">
            <h2>Filter</h2>
            <h3>Availability</h3>
            <div class="checkbox-list">
                <label><input type="checkbox"> Not Available (3)</label>
                <label><input type="checkbox"> In Stock (26)</label>
            </div>

            <h3>Price</h3>
            <p>
                <label for="amount">Range:</label>
                <input type="text" id="amount" style="border:0; color:#f6931f; font-weight:bold;">
            </p>
            <div id="slider-range"></div>
        </div>
    <?php } ?>

    <div class="sidebar-products clearfix">
        <h2>Bestsellers</h2>
        <div class="item">
            <a href="/product/sidebar"><img src="/assets/shop/pages/img/products/k1.jpg" alt="Some Shoes in Animal with Cut Out"></a>
            <h3><a href="/product/sidebar">Some Shoes in Animal with Cut Out</a></h3>
            <div class="price">$31.00</div>
        </div>
        <div class="item">
            <a href="/product/sidebar"><img src="/assets/shop/pages/img/products/k4.jpg" alt="Some Shoes in Animal with Cut Out"></a>
            <h3><a href="/product/sidebar">Some Shoes in Animal with Cut Out</a></h3>
            <div class="price">$23.00</div>
        </div>
        <div class="item">
            <a href="/product/sidebar"><img src="/assets/shop/pages/img/products/k3.jpg" alt="Some Shoes in Animal with Cut Out"></a>
            <h3><a href="/product/sidebar">Some Shoes in Animal with Cut Out</a></h3>
            <div class="price">$86.00</div>
        </div>
    </div>

</div>