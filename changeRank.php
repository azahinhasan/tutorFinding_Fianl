<?php

require_once 'model_z.php';
session_start();




if ($_SESSION["typeF"] == "moderator") {
    echo '<script>alert("Sorry! You have No Access to this Option!")</script>';
    echo "Please Go back to Previous Page!";
    //header('Location:admins_info.php');
    //header('Location:js/actionDenied.php');
} else {
    $_SESSION["Email"] = $_GET['Email'];
    if ($_GET['Type'] == "admin") {
        $_SESSION["Type"] = "moderator";
        if (updateType($_GET['Email'], $_SESSION["Type"])) {
            header('Location:admins_info.php');
        }
    } else {
        $_SESSION["Type"] = "admin";
        if (updateType($_GET['Email'], $_SESSION["Type"])) {
            header('Location:admins_info.php');
        }
    }
}
