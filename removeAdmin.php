<?php

require_once 'model_z.php';

if (deleteAdmin($_GET['Email'])) {
    header('Location:admins_info.php');
}
