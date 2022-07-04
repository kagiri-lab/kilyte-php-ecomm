<?php

namespace app\controllers\menu;


class TopBarController extends MenuItems
{


    private function start($text)
    {
        if (is_string($text)) {
            echo "<li class='dropdown'>";
            echo "<a class='dropdown-toggle' data-toggle='dropdown' data-target='#' href='javascript:;'>$text</a>";
            echo "<ul class='dropdown-menu'>";
        }
    }

    private function end()
    {
        echo "</ul></li>";
    }

    private function sub_start($text)
    {
        if (is_string($text)) {
            echo "<li class='dropdown-submenu'>";
            echo "<a class='dropdown-toggle' data-toggle='dropdown' data-target='#' href='javascript:;'>$text <i class='fa fa-angle-right'></i></a>";
            echo "<ul class='dropdown-menu' role='menu'>";
        }
    }

    private function sub_end()
    {
        echo "</ul></li>";
    }

    private function li($text, $url)
    {
        if (is_string($text))
            if (is_string($url))
                echo "<li><a href='$url'>$text</a></li>";
    }


    public function load()
    {
        $menuItems = $this->mainMenuBarItems();
        foreach ($menuItems as $mm => $mv) {
            if (is_array($mv)) {
                if (is_string($mv))
                    $this->li($mm, $mv);
                else {
                    $this->start($mm);
                    foreach ($mv as $mm1 => $mv1) {
                        if (is_string($mv1))
                            $this->li($mm1, $mv1);
                        else {
                            $this->sub_start($mm1);
                            foreach ($mv1 as $mm2 => $mv2) {
                                if (is_string($mv2))
                                    $this->li($mm2, $mv2);
                            }
                            $this->sub_end();
                        }
                    }
                    $this->end();
                }
            } else
                $this->li($mm, $mv);
        }
    }

    
}
