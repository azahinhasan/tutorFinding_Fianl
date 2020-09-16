<?php

require_once 'model_z.php';


if ($_GET['Type'] == "admin") {
    $_GET['Type'] == "mo";
    if (deleteAdmin($_GET['Type'])) {
        header('Location:admins_info.php');
    }
} else {
    $_GET['Type'] == "admin";
    if (deleteAdmin($_GET['Type'])) {
        header('Location:admins_info.php');
    }
}
