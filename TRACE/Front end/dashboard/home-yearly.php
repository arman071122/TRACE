<?php
    session_start();
    include "cards/db.php";
    $ktuid=$_SESSION['ktuid'];

    $query = "SELECT SUM(points) as y_points FROM certificates WHERE KTU_ID= '$ktuid' AND Academic_year = '1'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $row = mysqli_fetch_array($result);
        $y1_points = $row['y_points'];
    }
    else
    {
        //handle the error
        $y1_points = '0';
    }

    $query = "SELECT SUM(points) as y_points FROM certificates WHERE KTU_ID= '$ktuid' AND Academic_year = '2'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $row = mysqli_fetch_array($result);
        $y2_points = $row['y_points'];
    }
    else
    {
        //handle the error
        $y2_points = '0';
    }

    $query = "SELECT SUM(points) as y_points FROM certificates WHERE KTU_ID= '$ktuid' AND Academic_year = '3'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $row = mysqli_fetch_array($result);
        $y3_points = $row['y_points'];
    }
    else
    {
        //handle the error
        $y3_points = '0';
    }

    $query = "SELECT SUM(points) as y_points FROM certificates WHERE KTU_ID= '$ktuid' AND Academic_year = '4'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $row = mysqli_fetch_array($result);
        $y4_points = $row['y_points'];
    }
    else
    {
        //handle the error
        $y4_points = '0';
    }
?>

<html>
    <head>
        <meta charset="UTF-8" />
        <title> TRACE </title>
        <link rel="stylesheet" href="home-style.css">
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
                    <li><a href="#" class="act">
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                    <li><a href="dash-profile.php">
                        <i class="fas fa-user"></i>
                        <span class="nav-item">Profile</span>
                    </a></li>
                    <li><a href="dash-settings.html">
                        <i class="fas fa-cog"></i>
                        <span class="nav-item">Settings</span>
                    </a></li>
                    <li><a href="dash-help.html">
                        <i class="fas fa-question-circle"></i>
                        <span class="nav-item">Help</span>
                    </a></li>
                    <li><a href="../web login/Login.html" class="logout" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
                </ul>
            </nav>

            <section class="main">
                <div class="main-top">
                    <h1>Home</h1>
                    <i class="fas fa-home"></i>
                </div>
                <div class="main-home">
                    <div class="card">
                        <i class="fa-solid fa-upload"></i>
                        <h3>Upload</h3>
                        <p>Upload your certificate.</p>
                        <button onclick="upload()">upload</button>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-file-signature"></i>
                        <h3>Certificates</h3>
                        <p>View your certificates.</p>
                        <button onclick="view()">view</button>
                    </div>
                    <div class="card">
                        <i class="fas fa-chart-bar"></i>
                        <h3>Analytics&nbsp;</h3>
                        <p>View your status.</p>
                        <button>view</button>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-robot"></i>
                        <h3>Support</h3>
                        <p>Telegram support.</p>
                        <button onclick="botload()">open</button>
                    </div>
                </div>

                <section class="main-board">
                    <h1>My stats</h1>
                    <div class="board-box">
                        <ul>
                            <li><a href="dash-home.php">Progress</a></li>
                            <li class="active"><a href="#">Yearly</a></li>
                            <li><a href="home-notify.html">Notifications</a></li>
                        </ul>
                        <div class="board">
                            <div class="box-yearly">
                                <h3>Year 1</h3>
                                <p><?php echo $y1_points ?> POINTS</p>
                            </div>
                            <div class="box-yearly">
                                <h3>Year 2</h3>
                                <p><?php echo $y2_points ?> POINTS</p>
                            </div>
                            <div class="box-yearly">
                                <h3>Year 3</h3>
                                <p><?php echo $y3_points ?> POINTS</p>
                            </div>
                            <div class="box-yearly">
                                <h3>Year 4</h3>
                                <p><?php echo $y4_points ?> POINTS</p>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </body>
    <script src="delay.js"></script>
</html>