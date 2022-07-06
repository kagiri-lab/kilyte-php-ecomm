<?php

$breadcrumb = "Single Product";
$this->title = "$breadcrumb - {{site-name}}"

?>

<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="/">Home</a></li>
                        <li class="list-inline-item"><span>||</span> <?= $breadcrumb ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

<!-- Single Product Area -->
<section class="sg-product">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <div class="sg-img">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="sg1" role="tabpanel">
                                    <img src="/assets/shop/images/tab-1.png" alt="" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="sg2" role="tabpanel">
                                    <img src="/assets/shop/images/tab-2.png" alt="" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="sg3" role="tabpanel">
                                    <img src="/assets/shop/images/tab-3.png" alt="" class="img-fluid">
                                </div>
                                <div class="tab-pane" id="sg4" role="tabpanel">
                                    <img src="/assets/shop/images/tab-4.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="nav d-flex justify-content-between">
                                <a class="nav-item nav-link active" data-toggle="tab" href="#sg1"><img src="/assets/shop/images/tab-1.png" alt=""></a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#sg2"><img src="/assets/shop/images/tab-2.png" alt=""></a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#sg3"><img src="/assets/shop/images/tab-3.png" alt=""></a>
                                <a class="nav-item nav-link" data-toggle="tab" href="#sg4"><img src="/assets/shop/images/tab-4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="sg-content">
                            <div class="pro-tag">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><a href="">Home Appliance ,</a></li>
                                    <li class="list-inline-item"><a href="">Smart Led Tv</a></li>
                                </ul>
                            </div>
                            <div class="pro-name">
                                <p>Samsung Smart Led Tv With Speaker</p>
                            </div>
                            <div class="pro-rating">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                    <li class="list-inline-item"><a href="">( 09 Review )</a></li>
                                </ul>
                            </div>
                            <div class="pro-price">
                                <ul class="list-unstyled list-inline">
                                    <li class="list-inline-item">$129.00</li>
                                    <li class="list-inline-item">$199.00</li>
                                </ul>
                                <p>Availability : <span>In Stock</span> <label>(13 Available)</label></p>
                            </div>
                            <div class="colo-siz">
                                <div class="color">
                                    <ul class="list-unstyled list-inline">
                                        <li>Color :</li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="color-1" name="color" value="color-1">
                                            <label for="color-1"><span><i class="fa fa-check"></i></span></label>
                                        </li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="color-2" name="color" value="color-2">
                                            <label for="color-2"><span><i class="fa fa-check"></i></span></label>
                                        </li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="color-3" name="color" value="color-3">
                                            <label for="color-3"><span><i class="fa fa-check"></i></span></label>
                                        </li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="color-4" name="color" value="color-4">
                                            <label for="color-4"><span><i class="fa fa-check"></i></span></label>
                                        </li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="color-5" name="color" value="color-5">
                                            <label for="color-5"><span><i class="fa fa-check"></i></span></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="size">
                                    <ul class="list-unstyled list-inline">
                                        <li>Size :</li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="size-1" name="size" value="size-1">
                                            <label for="size-1">S</label>
                                        </li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="size-2" name="size" value="size-2">
                                            <label for="size-2">M</label>
                                        </li>
                                        <li class="list-inline-item">
                                            <input type="radio" id="size-3" name="size" value="size-3">
                                            <label for="size-3">L</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="qty-box">
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item">Qty :</li>
                                        <li class="list-inline-item quantity buttons_added">
                                            <input type="button" value="-" class="minus">
                                            <input type="number" step="1" min="1" max="10" value="1" class="qty text" size="4" readonly>
                                            <input type="button" value="+" class="plus">
                                        </li>
                                    </ul>
                                </div>
                                <div class="pro-btns">
                                    <a href="" class="cart">Add To Cart</a>
                                    <a href="" class="fav-com" data-toggle="tooltip" data-placement="top" title="Wishlist"><img src="/assets/shop/images/it-fav.png" alt=""></a>
                                    <a href="" class="fav-com" data-toggle="tooltip" data-placement="top" title="Compare"><img src="/assets/shop/images/it-comp.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="sg-tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#pro-det">Product Details</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#rev">Reviews (03)</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pro-det" role="tabpanel">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequatur, expedita, autem labore eos, totam rem quo similique est et qui quaerat cumque sed ab quae assumenda. Non, quas, nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, necessitatibus, dicta iusto in, similique quas<br><br> accusamus debitis illum distinctio nemo numquam obcaecati at itaque odio ducimus cupiditate minima labore libero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta consequatur, expedita, autem labore eos, totam rem quo similique est et qui quaerat cumque sed ab quae assumenda. <br><br>Non, quas, nihil! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, necessitatibus, dicta iusto in, similique quas accusamus debitis illum distinctio nemo numquam obcaecati at itaque odio ducimus cupiditate.</p>
                                </div>
                                <div class="tab-pane fade" id="rev" role="tabpanel">
                                    <div class="review-box d-flex">
                                        <div class="rv-img">
                                            <img src="/assets/shop/images/testimonial-1.jpg" alt="">
                                        </div>
                                        <div class="rv-content">
                                            <h6>Michel Kolins <span>(Feb 10, 2020)</span></h6>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos a deleniti dolorem architecto quae eligendi voluptatem omnis beatae at aut eveniet repellendus voluptas.</p>
                                        </div>
                                    </div>
                                    <div class="review-box d-flex">
                                        <div class="rv-img">
                                            <img src="/assets/shop/images/testimonial-2.jpg" alt="">
                                        </div>
                                        <div class="rv-content">
                                            <h6>Jenus Doe <span>(Feb 10, 2020)</span></h6>
                                            <ul class="list-unstyled list-inline">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                            <p>Consectetur adipisicing elit. Dignissimos a deleniti dolorem architecto quae eligendi voluptatem omnis beatae at aut eveniet repellendus voluptas.</p>
                                        </div>
                                    </div>
                                    <div class="review-form">
                                        <h6>Add Your Review</h6>
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="star-rating">
                                                        <label>Your Rating*</label>
                                                        <span class="fa fa-star-o" data-rating="1"></span>
                                                        <span class="fa fa-star-o" data-rating="2"></span>
                                                        <span class="fa fa-star-o" data-rating="3"></span>
                                                        <span class="fa fa-star-o" data-rating="4"></span>
                                                        <span class="fa fa-star-o" data-rating="5"></span>
                                                        <input type="hidden" name="whatever1" class="rating-value" value="0">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Your Name*</label>
                                                    <input type="text" name="name" required="">
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Your Email*</label>
                                                    <input type="text" name="email" required="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label>Your Review*</label>
                                                    <textarea required=""></textarea>
                                                    <button type="submit">Add Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="sim-pro">
                            <div class="sec-title">
                                <h5>Similar Product</h5>
                            </div>
                            <div class="sim-slider owl-carousel">
                                <div class="sim-item">
                                    <div class="sim-img">
                                        <img class="main-img img-fluid" src="/assets/shop/images/tab-5.png" alt="">
                                        <img class="sec-img img-fluid" src="/assets/shop/images/tab-16.png" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="/assets/shop/images/it-comp.png" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="/assets/shop/images/it-fav.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sim-heading">
                                        <p><a href="">Item Title Here</a></p>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="/assets/shop/images/it-cart.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sim-item">
                                    <div class="sim-img">
                                        <img class="main-img img-fluid" src="/assets/shop/images/tab-11.png" alt="">
                                        <img class="sec-img img-fluid" src="/assets/shop/images/tab-16.png" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="/assets/shop/images/it-comp.png" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="/assets/shop/images/it-fav.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sim-heading">
                                        <p><a href="">Item Title Here</a></p>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="/assets/shop/images/it-cart.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sim-item">
                                    <div class="sim-img">
                                        <img class="main-img img-fluid" src="/assets/shop/images/tab-7.png" alt="">
                                        <img class="sec-img img-fluid" src="/assets/shop/images/tab-16.png" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="/assets/shop/images/it-comp.png" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="/assets/shop/images/it-fav.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sim-heading">
                                        <p><a href="">Item Title Here</a></p>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="/assets/shop/images/it-cart.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sim-item">
                                    <div class="sim-img">
                                        <img class="main-img img-fluid" src="/assets/shop/images/tab-9.png" alt="">
                                        <img class="sec-img img-fluid" src="/assets/shop/images/tab-16.png" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="/assets/shop/images/it-comp.png" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="/assets/shop/images/it-fav.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sim-heading">
                                        <p><a href="">Item Title Here</a></p>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="/assets/shop/images/it-cart.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="sim-item">
                                    <div class="sim-img">
                                        <img class="main-img img-fluid" src="/assets/shop/images/tab-13.png" alt="">
                                        <img class="sec-img img-fluid" src="/assets/shop/images/tab-16.png" alt="">
                                        <div class="layer-box">
                                            <a href="" class="it-comp" data-toggle="tooltip" data-placement="left" title="Compare"><img src="/assets/shop/images/it-comp.png" alt=""></a>
                                            <a href="" class="it-fav" data-toggle="tooltip" data-placement="left" title="Favourite"><img src="/assets/shop/images/it-fav.png" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="sim-heading">
                                        <p><a href="">Item Title Here</a></p>
                                    </div>
                                    <div class="img-content d-flex justify-content-between">
                                        <div>
                                            <ul class="list-unstyled list-inline fav">
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                            <ul class="list-unstyled list-inline price">
                                                <li class="list-inline-item">$120.00</li>
                                                <li class="list-inline-item">$150.00</li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><img src="/assets/shop/images/it-cart.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="category-box">
                    <div class="sec-title">
                        <h6>Categories</h6>
                    </div>
                    <!-- accordion -->
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse1">
                                    <span>Clothing</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapse1" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse2">
                                    <span>Electronics</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapse2" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse3">
                                    <span>Home Appliance</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapse3" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse4">
                                    <span>Smartphone</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapse4" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse5">
                                    <span>Computer</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapse5" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse6">
                                    <span>Kids Collection</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapse6" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <a href="" data-toggle="collapse" data-target="#collapse7">
                                    <span>Automobile</span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>
                            <div id="collapse7" class="collapse">
                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 1</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 2</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 3</a></li>
                                        <li><a href=""><i class="fa fa-angle-right"></i> Catagory 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ht-offer">
                    <div class="sec-title">
                        <h6>Hot Offer</h6>
                    </div>
                    <div class="ht-body owl-carousel">
                        <div class="ht-item">
                            <div class="ht-img">
                                <a href="#"><img src="/assets/shop/images/tab-15.png" alt="" class="img-fluid"></a>
                                <span>- 59%</span>
                                <ul class="list-unstyled list-inline counter-box">
                                    <li class="list-inline-item">185 <p>Days</p>
                                    </li>
                                    <li class="list-inline-item">11 <p>Hrs</p>
                                    </li>
                                    <li class="list-inline-item">39 <p>Mins</p>
                                    </li>
                                    <li class="list-inline-item">51 <p>Sec</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="ht-content">
                                <p><a href="">Items Title Name Enter Here</a></p>
                                <ul class="list-unstyled list-inline fav">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <ul class="list-unstyled list-inline price">
                                    <li class="list-inline-item">$120.00</li>
                                    <li class="list-inline-item">$150.00</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ht-item">
                            <div class="ht-img">
                                <a href="#"><img src="/assets/shop/images/tab-14.png" alt="" class="img-fluid"></a>
                                <span>- 59%</span>
                                <ul class="list-unstyled list-inline counter-box">
                                    <li class="list-inline-item">185 <p>Days</p>
                                    </li>
                                    <li class="list-inline-item">11 <p>Hrs</p>
                                    </li>
                                    <li class="list-inline-item">39 <p>Mins</p>
                                    </li>
                                    <li class="list-inline-item">51 <p>Sec</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="ht-content">
                                <p><a href="">Items Title Name Enter Here</a></p>
                                <ul class="list-unstyled list-inline fav">
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                </ul>
                                <ul class="list-unstyled list-inline price">
                                    <li class="list-inline-item">$120.00</li>
                                    <li class="list-inline-item">$150.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-box">
                    <a href=""><img src="/assets/shop/images/s-banner1.jpg" alt="" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Single Product Area -->