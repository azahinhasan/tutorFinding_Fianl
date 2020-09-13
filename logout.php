<<<<<<< HEAD
<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: LoginTutor.php");
exit;
=======
<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: LoginTutor.php");
exit;
>>>>>>> 8400874d831066dfad64911929c94ee7e9d508cf
