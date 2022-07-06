<!doctype html>
<html class="no-js" lang="zxx">

<?php

use app\controllers\menu\CategoryMenu;
use app\controllers\menu\MobileMenu;
use app\controllers\menu\StickyMenu;

$mainmenu = new StickyMenu;

require('header.php') ?>

<body>

    <?php require('preloader.php') ?>

    {{content}}

    <?php require('scripts.php'); ?>

</body>

</html>