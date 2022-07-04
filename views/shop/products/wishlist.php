<?php

$breadcrumb = "My Wish List";
$this->title = "$breadcrumb - {{site-name}}"

?>

<div class="main">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="active"><?= $breadcrumb ?></li>
    </ul>
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN SIDEBAR -->
      <?php require('product-side-menu.php'); ?>
      <!-- END SIDEBAR -->

      <!-- BEGIN CONTENT -->
      <div class="col-md-9 col-sm-7">
        <h1><?= $breadcrumb ?></h1>
        <div class="goods-page">
          <div class="goods-data clearfix">
            <div class="table-wrapper-responsive">
              <table summary="Shopping cart">
                <tr>
                  <th class="goods-page-image">Image</th>
                  <th class="goods-page-description">Description</th>
                  <th class="goods-page-stock">Stock</th>
                  <th class="goods-page-price" colspan="2">Unit price</th>
                </tr>
                <tr>
                  <td class="goods-page-image">
                    <a href="javascript:;"><img src="/assets/shop/pages/img/products/model3.jpg" alt="Berry Lace Dress"></a>
                  </td>
                  <td class="goods-page-description">
                    <h3><a href="javascript:;">Cool green dress with red bell</a></h3>
                    <p><strong>Item 1</strong> - Color: Green; Size: S</p>
                    <em>More info is here</em>
                  </td>
                  <td class="goods-page-stock">
                    In Stock
                  </td>
                  <td class="goods-page-price">
                    <strong><span>$</span>47.00</strong>
                  </td>
                  <td class="del-goods-col">
                    <a class="del-goods" href="javascript:;">&nbsp;</a>
                    <a class="add-goods" href="javascript:;">&nbsp;</a>
                  </td>
                </tr>
                <tr>
                  <td class="goods-page-image">
                    <a href="javascript:;"><img src="/assets/shop/pages/img/products/model4.jpg" alt="Berry Lace Dress"></a>
                  </td>
                  <td class="goods-page-description">
                    <h3><a href="javascript:;">Cool green dress with red bell</a></h3>
                    <p><strong>Item 1</strong> - Color: Green; Size: S</p>
                    <em>More info is here</em>
                  </td>
                  <td class="goods-page-stock">
                    In Stock
                  </td>
                  <td class="goods-page-price">
                    <strong><span>$</span>47.00</strong>
                  </td>
                  <td class="del-goods-col">
                    <a class="del-goods" href="javascript:;">&nbsp;</a>
                    <a class="add-goods" href="javascript:;">&nbsp;</a>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>