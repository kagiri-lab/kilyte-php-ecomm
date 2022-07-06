<?php

$breadcrumb = "Login";
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

<!-- Log In -->
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="n-customer">
                    <h5>New Customer</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem est eum earum eius dolores, alias modi aut officia quo perferendis id aspernatur neque provident quas, quidem libero veritatis voluptatum illum!</p>
                    <a href="#">Create an Account</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="r-customer">
                    <h5>Registered Customer</h5>
                    <p>If you have an account with us, please log in.</p>
                    <form action="#">
                        <div class="emal">
                            <label>User name or email address</label>
                            <input type="text" name="eml">
                        </div>
                        <div class="pass">
                            <label>Password</label>
                            <input type="text" name="pass">
                        </div>
                        <div class="d-flex justify-content-between nam-btm">
                            <div>
                                <input type="checkbox" name="rememberme" id="rmme">
                                <label for="rmme">Remember Me</label>
                            </div>
                            <div>
                                <a href="">Lost your password?</a>
                            </div>
                        </div>
                        <button type="button" name="button">Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Log In -->