<?php
session_start();
include "headerTutorHome.html";


//$_SESSION["loggedin"] !== "tutor";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== "tutor") {
    header("location: LoginTutor.php");
    exit;
}
?>





<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url('tutorBackground2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        .welcome {
            display: inline-block;
            padding-left: 25%;
            padding-top: 25%;
            font-weight: bold;
            font-size: 400%;
            color: #333;
        }

        .topnav a.home {
            background-color: #008CBA;
            color: white;
        }
    </style>
    <title>Welcome Tutor</title>
</head>

<body>
    <div class="welcome">
        <?php echo "Welcome " . $_SESSION['Email']; ?>
        <!-- <h1>Welcome!</h1> -->
    </div>


    <?php include "footer.php"; ?>

</body>

</html>