<?php
    session_start();
    include "db.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
        error_log("Form submitted");
        $curr_pwd = $_POST['curr_pwd'];
        $new_pwd = $_POST['new_pwd'];
        $cfm_pwd = $_POST['cfm_pwd'];

        // check if the current password matches the one in the database
        $email = $_SESSION['email'];
        $query = "SELECT * FROM tr_details WHERE email = '$email' AND Password = '$curr_pwd'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) == 1) {
            // current password is correct
            if ($new_pwd == $cfm_pwd) {
                // new password and confirm password match
                // update the password in the database
                $query = "UPDATE tr_details SET `Password` = '$new_pwd' WHERE email = '$email'";
                $result2=mysqli_query($con, $query);
                if($result2)
                {
                    // display a success message
                    echo "<script>alert('Password changed successfully');</script>";
                }
                else
                {
                    echo("Error description: " . $con -> error);
                }
                
            } else {
                // new password and confirm password do not match
                // display an error message
                echo "<script>alert('New password and confirm password do not match');</script>";
            }
        } else {
            // current password is incorrect
            // display an error message
            echo "<script>alert('Current password is incorrect');</script>";
        }
    }
?>

<html>
    <head>
        <meta charset="UTF-8" />
        <title> Trace-settings </title>
        <link rel="stylesheet" href="set-help-style.css">
        <script src="https://kit.fontawesome.com/2b98f88911.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#" class="logo">
                        <img src="logo.png" alt="">
                        <span class="nav-item">Trace</span>
                    </a></li>
                    <li><a href="#">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Settings</span>
                    </a></li>
                    <li><a href="dash-home.html" class="back">
                        <i class="fas fa-solid fa-arrow-left"></i>
                        <span class="nav-item">back</span>
                    </a></li>
                </ul>
            </nav>
            <section class="main">
                <div class="main-top">
                    <h1>Settings</h1>
                    <i class="fas fa-cog"></i>
                </div>
                <div class="main-set">
                    <form method="post">
                        <div class="popup">
                            <label for="<EUGPSCoordinates>curr-pwd">Current password: </label>
                            <input type="<EUGPSCoordinates>password" id="<EUGPSCoordinates>curr-pwd" name="curr_pwd">
                            <label for="<EUGPSCoordinates>new-pwd">New password: </label>
                            <input type="<EUGPSCoordinates>password" id="<EUGPSCoordinates>new-pwd" name="new_pwd">
                            <label for="<EUGPSCoordinates>cfm-pwd">Confirm password: </label>
                            <input type="<EUGPSCoordinates>password" id="<EUGPSCoordinates>cfm-pwd" name="cfm_pwd">
                        </div>
                        <div class="chng-pwd">
                            <button class="chngpwrd" type="<EUGPSCoordinates>submit" name="<EUGPSCoordinates>submit">Change password</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
</html>