<?php
class Route
{
    public static function route_site()
    {
        $pathView = "views/frontend/";
        if (!isset($_REQUEST["option"])) {
            $pathView .= "home.php";
        } else {
            $pathView .= $_REQUEST["option"];
            if (!isset($_REQUEST["slug"])) {
                $pathView .= "-detail.php";
            } else {
                if (!isset($_REQUEST["cat"])) {
                    $pathView .= "-category.php";
                } else {
                    $pathView .= ".php";
                }
            }
        }
        require_once $pathView;
    }
    public static function route_admin()
    {
        $pathView = "../views/backend/";
        if (!isset($_REQUEST['option'])) {
            $pathView .= "dashboard/index.php";
        } else {
            $pathView .= $_REQUEST['option'] . "/";
            if (isset($_REQUEST['cat'])) {
                $pathView .= $_REQUEST['cat'] . ".php";
            } else {
                $pathView .= "index.php";
            }
        }
        require_once $pathView;
    }
}