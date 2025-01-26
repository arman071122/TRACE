<?php
    session_start();
    include "db.php";
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
        <title> Trace-Analytics </title>
        <link rel="stylesheet" href="analytics_style.css">
        <script src="https://kit.fontawesome.com/2b98f88911.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="#" class="logo">
                        <img src="logo.png" alt="">
                        <span class="nav-item">Trace</span>
                    <li><a href="#">
                    <i class="fas fa-chart-bar"></i>
                        <span class="nav-item">Analytics</span>
                    </a></li>
                    <li><a href="../dash-home.php" class="back">
                        <i class="fas fa-solid fa-arrow-left"></i>
                        <span class="nav-item">back</span>
                    </a></li>
                </ul>
            </nav>
            <section class="main">
                <div class="main-top">
                    <h1>Analytics</h1>
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="main-set">
                    <div class="card">
                        <h3>Total points</h3>
                        <p><?php echo $total_points ?></p>
                    </div>
                    <div class="card">
                        <table class="box">
                            <tr>
                                <th>Year 1</th>
                                <th>Year 2</th>
                                <th>Year 3</th>
                                <th>Year 4</th>
                            </tr>
                            <tr>
                                <td><?php echo $y1_points ?></td>
                                <td><?php echo $y2_points ?></td>
                                <td><?php echo $y3_points ?></td>
                                <td><?php echo $y4_points ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="card">
                        <h3>Requirement Quota</h3>
                        <p>
                            <?php
                                if($total_points >= 100)
                                    echo("Quota met");
                                else
                                    echo("Quota pending");
                            ?>
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>