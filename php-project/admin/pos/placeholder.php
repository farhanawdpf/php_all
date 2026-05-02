<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page == 1) {
        include("pages/user/add_user.php");
    } else if ($page == 2) {
        include("pages/user/view_user.php");
    } else if ($page == 3) {
        include("pages/category/add_cat.php");
    } else {
        echo "Welcome to my Ne Project";
    }
}
