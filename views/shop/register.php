<?php

$breadcrumb = "Register";
$this->title = "$breadcrumb - {{site-name}}"

?>


<!-- Breadcrumb Area -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-box text-center">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item"><a href="">Home</a></li>
                        <li class="list-inline-item"><span>||</span> <?= $breadcrumb ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Breadcrumb Area -->

<!-- Register -->
<section class="register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="#">
                    <h5>Create Your Account</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <label>First Name*</label>
                            <input type="text" name="f-name" placeholder="Your first name">
                        </div>
                        <div class="col-md-12">
                            <label>Last Name*</label>
                            <input type="text" name="l-name" placeholder="Your Last name">
                        </div>
                        <div class="col-md-12">
                            <label>Email Address*</label>
                            <input type="text" name="mail" placeholder="Your email address">
                        </div>
                        <div class="col-md-12">
                            <label>Phone Number*</label>
                            <input type="text" name="phn" placeholder="Your phone number">
                        </div>
                        <div class="col-md-12">
                            <label>Password*</label>
                            <input type="text" name="pas" placeholder="Password should be more than 6 character">
                        </div>
                        <div class="col-md-12">
                            <label>Confirm Password*</label>
                            <input type="text" name="c-pas" placeholder="Confirm your password">
                        </div>
                        <div class="col-md-7">
                            <div>
                                <input type="checkbox" name="t-box" id="t-box">
                                <label for="t-box">I have read the terms and condition.</label>
                            </div>
                            <div>
                                <input type="checkbox" name="c-box" id="c-box">
                                <label for="c-box">Subscribe for newsletter</label>
                            </div>
                        </div>
                        <div class="col-md-5 text-right">
                            <button type="button" name="button">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Register -->