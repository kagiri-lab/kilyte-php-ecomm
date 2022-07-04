<?php

$breadcrumb = "Contact";
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
      <?php require('login-side-menu.php') ?>
      <!-- END SIDEBAR -->

      <!-- BEGIN CONTENT -->
      <div class="col-md-9 col-sm-9">
        <h1>Contact</h1>
        <div class="content-page">
          <h2>Contact Form</h2>
          <p>Lorem ipsum dolor sit amet, Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat consectetuer adipiscing elit, sed diam nonummy nibh euismod tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>

          <!-- BEGIN FORM-->
          <form action="#" class="default-form" role="form">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label for="email">Email <span class="require">*</span></label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" rows="8" id="message"></textarea>
            </div>
            <div class="padding-top-20">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          <!-- END FORM-->
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>