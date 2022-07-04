<?php

namespace app\controllers\menu;


class LeftSideBarController extends MenuItems
{

    private function li($text)
    {
        if (!is_array($text)) {
            echo "<li class='list-group-item clearfix'>";
            echo "<a href='/category/men'><i class='fa fa-angle-right'></i> $text</a>";
            echo "</li>";
        }
    }

    private function sub_start($text)
    {
        if (!is_array($text)) {
            echo "<li class='list-group-item dropdown clearfix'>";
            echo "<a href='javascript:void(0);'><i class='fa fa-angle-right'></i> $text </a>";
            echo " <ul class='dropdown-menu'>";
        }
    }

    private function sub_end()
    {
        echo " </ul>";
        echo "</li>";
    }

    public function load()
    {
        $menuItems = $this->leftSideBarItems();
        echo "<ul class='list-group margin-bottom-25 sidebar-menu'>";
        foreach ($menuItems as $sm => $sv) {
            if (!is_array($sv))
                $this->li($sm);
            else {
                if (count($sv) > 0) {
                    $this->sub_start($sm);
                    foreach ($sv as $sm1 => $sv1) {
                        if (!is_array($sv1))
                            $this->li($sm1);
                        else {
                            if (count($sv1) > 0) {
                                $this->sub_start($sm1);
                                foreach ($sv1 as $sm2 => $sv2) {
                                    if (!is_array($sv2))
                                        $this->li($sm2);
                                    else {
                                        if (count($sv2) > 0) {
                                            $this->sub_start($sm2);
                                            foreach ($sv2 as $sm3 => $sv3) {
                                                if (!is_array($sv3))
                                                    $this->li($sm3);
                                            }
                                            $this->sub_end();
                                        } else
                                            $this->li($sm2);
                                    }
                                }
                                $this->sub_end();
                            } else
                                $this->li($sm1);
                        }
                    }
                    $this->sub_end();
                } else
                    $this->li($sm);
            }
        }
        echo "</ul>";
    }


    
}
