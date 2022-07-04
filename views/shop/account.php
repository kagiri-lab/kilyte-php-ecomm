<?php

$breadcrumb = "My Account";
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
      <div class="col-md-9 col-sm-7">
        <h1><?= $breadcrumb ?></h1>
        <div class="content-page">
          <h3>My Account</h3>
          <ul>
            <li><a href="javascript:;">Edit your account information</a></li>
            <li><a href="javascript:;">Change your password</a></li>
            <li><a href="javascript:;">Modify your address book entries</a></li>
            <li><a href="javascript:;">Modify your wish list</a></li>
          </ul>
          <hr>

          <h3>My Orders</h3>
          <ul>
            <li><a href="javascript:;">View your order history</a></li>
            <li><a href="javascript:;">Downloads</a></li>
            <li><a href="javascript:;">Your Reward Points</a></li>
            <li><a href="javascript:;">View your return requests</a></li>
            <li><a href="javascript:;">Your Transactions</a></li>
          </ul>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>