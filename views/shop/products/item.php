<?php

$breadcrumb =  ucwords($item) . " Category";
$this->title = "$breadcrumb - {{site-name}}";
?>

<div class="main">
  <div class="container">
    <ul class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li><a href="">Product</a></li>
      <li class="active"><?= $item ?></li>
    </ul>
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN SIDEBAR -->
      <?php require('product-side-menu.php') ?>
      <!-- END SIDEBAR -->

      <!-- BEGIN CONTENT -->
      <div class="col-md-9 col-sm-7">
        <div class="product-page">
          <div class="row">
            <div class="col-md-6 col-sm-6">
              <div class="product-main-image">
                <img src="/assets/shop/pages/img/products/model7.jpg" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="/assets/shop/pages/img/products/model7.jpg">
              </div>
              <div class="product-other-images">
                <a href="/assets/shop/pages/img/products/model3.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="/assets/shop/pages/img/products/model3.jpg"></a>
                <a href="/assets/shop/pages/img/products/model4.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="/assets/shop/pages/img/products/model4.jpg"></a>
                <a href="/assets/shop/pages/img/products/model5.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="/assets/shop/pages/img/products/model5.jpg"></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <h1>Cool green dress with red bell</h1>
              <div class="price-availability-block clearfix">
                <div class="price">
                  <strong><span>$</span>47.00</strong>
                  <em>$<span>62.00</span></em>
                </div>
                <div class="availability">
                  Availability: <strong>In Stock</strong>
                </div>
              </div>
              <div class="description">
                <p>Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat
                  Nostrud duis molestie at dolore.</p>
              </div>
              <div class="product-page-options">
                <div class="pull-left">
                  <label class="control-label">Size:</label>
                  <select class="form-control input-sm">
                    <option>L</option>
                    <option>M</option>
                    <option>XL</option>
                  </select>
                </div>
                <div class="pull-left">
                  <label class="control-label">Color:</label>
                  <select class="form-control input-sm">
                    <option>Red</option>
                    <option>Blue</option>
                    <option>Black</option>
                  </select>
                </div>
              </div>
              <div class="product-page-cart">
                <div class="product-quantity">
                  <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                </div>
                <button class="btn btn-primary" type="submit">Add to cart</button>
              </div>
              <div class="review">
                <input type="range" value="4" step="0.25" id="backing4">
                <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                </div>
                <a href="javascript:;">7 reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="javascript:;">Write a review</a>
              </div>
              <ul class="social-icons">
                <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
              </ul>
            </div>

            <div class="product-page-content">
              <ul id="myTab" class="nav nav-tabs">
                <li><a href="#Description" data-toggle="tab">Description</a></li>
                <li><a href="#Information" data-toggle="tab">Information</a></li>
                <li class="active"><a href="#Reviews" data-toggle="tab">Reviews (2)</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade" id="Description">
                  <p>Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed sit nonumy nibh sed euismod laoreet dolore magna aliquarm erat sit volutpat Nostrud duis molestie at dolore. </p>
                </div>
                <div class="tab-pane fade" id="Information">
                  <table class="datasheet">
                    <tr>
                      <th colspan="2">Additional features</th>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 1</td>
                      <td>21 cm</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 2</td>
                      <td>700 gr.</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 3</td>
                      <td>10 person</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 4</td>
                      <td>14 cm</td>
                    </tr>
                    <tr>
                      <td class="datasheet-features-type">Value 5</td>
                      <td>plastic</td>
                    </tr>
                  </table>
                </div>
                <div class="tab-pane fade in active" id="Reviews">
                  <!--<p>There are no reviews for this product.</p>-->
                  <div class="review-item clearfix">
                    <div class="review-item-submitted">
                      <strong>Bob</strong>
                      <em>30/12/2013 - 07:37</em>
                      <div class="rateit" data-rateit-value="5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                    </div>
                    <div class="review-item-content">
                      <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                    </div>
                  </div>
                  <div class="review-item clearfix">
                    <div class="review-item-submitted">
                      <strong>Mary</strong>
                      <em>13/12/2013 - 17:49</em>
                      <div class="rateit" data-rateit-value="2.5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                    </div>
                    <div class="review-item-content">
                      <p>Sed velit quam, auctor id semper a, hendrerit eget justo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis vel arcu pulvinar dolor tempus feugiat id in orci. Phasellus sed erat leo. Donec luctus, justo eget ultricies tristique, enim mauris bibendum orci, a sodales lectus purus ut lorem.</p>
                    </div>
                  </div>

                  <!-- BEGIN FORM-->
                  <form action="#" class="reviews-form" role="form">
                    <h2>Write a review</h2>
                    <div class="form-group">
                      <label for="name">Name <span class="require">*</span></label>
                      <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="review">Review <span class="require">*</span></label>
                      <textarea class="form-control" rows="8" id="review"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="email">Rating</label>
                      <input type="range" value="4" step="0.25" id="backing5">
                      <div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false" data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                      </div>
                    </div>
                    <div class="padding-top-20">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </form>
                  <!-- END FORM-->
                </div>
              </div>
            </div>

            <div class="sticker sticker-sale"></div>
          </div>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->

    <!-- BEGIN SIMILAR PRODUCTS -->
    <div class="row margin-bottom-40">
      <div class="col-md-12 col-sm-12">
        <h2>Most popular products</h2>
        <div class="owl-carousel owl-carousel4">
          <div>
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="/assets/shop/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="/assets/shop/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                  <a href="/product/popular" class="btn btn-default fancybox-fast-view">View</a>
                </div>
              </div>
              <h3><a href="/product/item">Berry Lace Dress</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
              <div class="sticker sticker-new"></div>
            </div>
          </div>
          <div>
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="/assets/shop/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="/assets/shop/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                  <a href="/product/popular" class="btn btn-default fancybox-fast-view">View</a>
                </div>
              </div>
              <h3><a href="/product/item">Berry Lace Dress2</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
            </div>
          </div>
          <div>
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="/assets/shop/pages/img/products/k3.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="/assets/shop/pages/img/products/k3.jpg" class="btn btn-default fancybox-button">Zoom</a>
                  <a href="/product/popular" class="btn btn-default fancybox-fast-view">View</a>
                </div>
              </div>
              <h3><a href="/product/item">Berry Lace Dress3</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
            </div>
          </div>
          <div>
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="/assets/shop/pages/img/products/k4.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="/assets/shop/pages/img/products/k4.jpg" class="btn btn-default fancybox-button">Zoom</a>
                  <a href="/product/popular" class="btn btn-default fancybox-fast-view">View</a>
                </div>
              </div>
              <h3><a href="/product/item">Berry Lace Dress4</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
              <div class="sticker sticker-sale"></div>
            </div>
          </div>
          <div>
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="/assets/shop/pages/img/products/k1.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="/assets/shop/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a>
                  <a href="/product/popular" class="btn btn-default fancybox-fast-view">View</a>
                </div>
              </div>
              <h3><a href="/product/item">Berry Lace Dress5</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
            </div>
          </div>
          <div>
            <div class="product-item">
              <div class="pi-img-wrapper">
                <img src="/assets/shop/pages/img/products/k2.jpg" class="img-responsive" alt="Berry Lace Dress">
                <div>
                  <a href="/assets/shop/pages/img/products/k2.jpg" class="btn btn-default fancybox-button">Zoom</a>
                  <a href="/product/popular" class="btn btn-default fancybox-fast-view">View</a>
                </div>
              </div>
              <h3><a href="/product/item">Berry Lace Dress6</a></h3>
              <div class="pi-price">$29.00</div>
              <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END SIMILAR PRODUCTS -->
  </div>
</div>