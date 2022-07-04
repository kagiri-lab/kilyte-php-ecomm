<!DOCTYPE html>

<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
    <meta charset="utf-8">
    <title><?= $this->title ?></title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="description" name="description">
    <meta content="keywords" name="keywords">
    <meta content="kilyte" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="/assets/shop/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/shop/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="/assets/shop/pages/css/animate.css" rel="stylesheet">
    <link href="/assets/shop/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <link href="/assets/shop/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="/assets/shop/pages/css/components.css" rel="stylesheet">
    <link href="/assets/shop/pages/css/slider.css" rel="stylesheet">
    <link href="/assets/shop/pages/css/style-shop.css" rel="stylesheet" type="text/css">
    <link href="/assets/shop/corporate/css/style.css" rel="stylesheet">
    <link href="/assets/shop/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="/assets/shop/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="/assets/shop/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">

    <?php require('header.php'); ?>


    {{content}}

    <!-- BEGIN BRANDS -->
    <?php require('brands.php'); ?>
    <!-- END BRANDS -->

    <!-- BEGIN STEPS -->
    <?php require('shopping-steps.php') ?>
    <!-- END STEPS -->

    <!-- BEGIN PRE-FOOTER -->
    <?php require('pre-footer.php') ?>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <?php require('footer.php') ?>
    <!-- END FOOTER -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="/assets/shop/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="/assets/shop/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/shop/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/shop/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/shop/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="/assets/shop/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="/assets/shop/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="/assets/shop/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->
    <script src='/assets/shop/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="/assets/shop/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="/assets/shop/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="/assets/shop/pages/scripts/bs-carousel.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();

            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>