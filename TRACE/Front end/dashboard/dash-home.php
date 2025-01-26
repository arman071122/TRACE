<?php
    session_start();
    include "cards/db.php";
    $ktuid=$_SESSION['ktuid'];
    $query = "SELECT sum(points) as total_points from certificates where KTU_ID='$ktuid'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $row = mysqli_fetch_array($result);
        $total_points = $row['total_points'];
    }
    else
    {
        //handle the error
    }

    $query = "SELECT Year FROM user_details WHERE KTU_ID='$ktuid'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $row = mysqli_fetch_array($result);
        $current_year = $row['Year'];
    }
    else
    {
        //handle the error
    }

    $query = "SELECT SUM(c.points) as curr_points FROM certificates c JOIN user_details ud ON c.KTU_ID = ud.KTU_ID where ud.KTU_ID= '$ktuid' AND c.Academic_year = '$current_year'";
    $result = mysqli_query($con, $query);
    if($result)
    {
        $row = mysqli_fetch_array($result);
        $curr_points = $row['curr_points'];
    }
    else
    {
        //handle the error
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
                    <li><a href="dash-settings.php">
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
                        <button onclick="analyit()">view</button>
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
                            <li class="active"><a href="#">Progress</a></li>
                            <li><a href="home-yearly.php">Yearly</a></li>
                            <li><a href="home-notify.html">Notifications</a></li>
                        </ul>
                        <div class="board">
                            <div class="box">
                                <h3>MY POINTS</h3>
                                <p><?php echo $total_points ?> POINTS</p>
                                <button onclick="analyit()">expand</button>
                                <i class="fa-solid fa-bars-progress pts"></i>
                            </div>
                            <div class="box">
                                <h3>Current year</h3>
                                <p><?php echo $curr_points ?> POINTS</p>
                                <button onclick="analyit()">expand</button>
                                <i class="fa-regular fa-calendar crnt"></i>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </div>
    </body>
    <script src="delay.js"></script>
</html>