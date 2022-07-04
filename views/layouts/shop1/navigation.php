<?php

use app\controllers\ShopController;

$mainMenu = ShopController::shopMainMenu();


function main_menu_catalogue_start($text)
{
    if (!is_array($text)) {
        echo "<li class='dropdown dropdown100 nav-catalogue'>";
        echo "<a class='dropdown-toggle' data-toggle='dropdown' data-target='#' href='javascript:;'>$text</a>";
    }
}

function main_menu_catalogue_end()
{
    echo "</li>";
}

function main_menu_mega_menu_start($text)
{
    if (!is_array($text)) {
        echo "<li class='dropdown dropdown-megamenu'>";
        echo "<a class='dropdown-toggle' data-toggle='dropdown' data-target='#' href='javascript:;'>$text</a>";
    }
}

function main_menu_mega_menu_end()
{
    echo "</li>";
}

function main_menu_simple_start($text)
{
    if (!is_array($text)) {
        echo "<li class='dropdown'>";
        echo "<a class='dropdown-toggle' data-toggle='dropdown' data-target='#' href='javascript:;'>$text</a>";
    }
}

function main_menu_simple_end()
{
    echo "</li>";
}

foreach ($mainMenu as $mm => $mv) {
    if (is_array($mv)) {
        if (count($mv) > 0) {
            if (array_key_exists("style", $mv)) {
            }
        } else {
            echo "<li><a href='/'>$mm</a></li>";
        }
    }
}
