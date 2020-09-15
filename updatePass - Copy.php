<!DOCTYPE HTML>
<html>

<head>
    <script src="js/script.js"></script>
    <script src="js/script.js" type="text/javascript?newversion"></script>
    <style>
        .error {
            color: #FF0000;
        }

        #date {
            width: 27px;
        }

        #form {
            display: block;
            text-align: left;
            display: block;

            position: relative;
            left: 35%;
            top: 0;
            font-size: 18px;


        }
    </style>
</head>

<body>
    <?php
    require_once './model_z.php';
    //require_once 'js/script.js';
    //require_once './LoginTutor.php';
    session_start();
    $cPassword = $nPassword = $rPassword =  $cPasswordErr = $nPasswordErr = $rPasswordErr = "";
    $couner = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {



        /*if (empty($_POST["nPassword"])) {
            $nPasswordErr = "nPassword is required";
        } else {
            if ($_POST["cPassword"] == $_POST["nPassword"]) {
                $nPasswordErr = "New Password should not be same as the Current Password";
            } else {
                $nPassword = $_POST["nPassword"];
                $couner++;
            }
        }
        if (empty($_POST["rPassword"])) {
            $rPasswordErr = "rPasswordErr is required";
        } else {
            if ($_POST["rPassword"] <> $_POST["nPassword"]) {
                $rPasswordErr = "New Password not match with the Retyped Password";
            } else {
                $rPassword = $_POST["rPassword"];
                $couner++;
            }
        }*/




        /*$lng = 103.72;
$lat = 1.34628;

echo "<script type='text/javascript'>document.write(GetAddress(",$lat,",",$lng,"));</script>"; */

        //$cPass = '<script type="text/javascript">document.write(cPass(",$cPassword,"));</script>';
        $true = "t";
        $cP = $_POST["cPassword"];
        $rP = $_POST["rPassword"];
        $nP = $_POST["nPassword"];
        $cPass = "<script>document.write(cPass('$cP','$nP','$rP'));</script>";


        //  $nPass = "<script type='text/javascript'>document.write(nPass('$nP'));</script>";

        //$rPass = "<script type='text/javascript'>document.write(rPass('$rP'));</script>";


        // $cPasswordErr =  $cPass;
        //$nPasswordErr =  $nPass;
        // echo $a = $cPass;
        // echo gettype($cPass);

        // $a = number_format($cPass);
        // echo gettype($a);
        $counter = 0;
        /* $cPasswordErr =  $cPass;
        $nPasswordErr =  $nPass;
        $rPasswordErr =  $rPass;*/


        if ($cPass) {
            $counter = 3;
        }

        //echo $cPass;
        //echo "<script type='text/javascript'>document.write(v);</script>";
    }



    if ($couner == 3) {
        $data1['Password'] = $_POST["nPassword"];
        $cPasswordErr = "Wrong Password";
        if ($_SESSION["passForUpdatePass"] == $_POST["cPassword"]) {

            if (checkPass($data1) == null) {
                if ($_POST["rPassword"] == $_POST["nPassword"]) {
                    $data['Password'] = $_POST["nPassword"];
                    $data['Email'] = $_SESSION["emailForUpdatePass"];
                    if (updatePass($data)) {
                        header("Location: workDone.php");
                        exit();
                    } else {
                        echo 'Not Updated';
                    }
                }
            } else {
                $nPassword = "This Password is Taken";
            }
        } else {
            $cPasswordErr = "Wrong Password";
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <?php include "headerTutorHome.html"; ?>

    <script>
        var v = 5;
    </script>

    <dev class="main">

        <form id="form" method="post" onsubmit="return validateForm()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <table>
                <tr>
                    <td>
                        Current Password:
                    </td>
                    <td>
                        <input type="password" name="cPassword" value=<?php echo $cPassword ?>>
                        <span class="error">* <?php echo $cPasswordErr; ?></span>
                    </td>
                </tr>
                <br><br>
                <tr>
                    <td>
                        New Password:
                    </td>
                    <td>
                        <input type="password" name="nPassword" value=<?php echo $nPassword ?>>
                        <span class="error">* <?php echo $nPasswordErr; ?></span>
                    </td>
                </tr>
                <br><br>
                <tr>
                    <td>
                        Retype New Password:
                    </td>
                    <td>
                        <input type="password" name="rPassword" value=<?php echo $rPassword ?>>
                        <span class="error">* <?php echo $rPasswordErr; ?></span>
                    </td>
                </tr>
                <br><br>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </dev>
</body>
<?php include "footer.php"; ?>

</html>