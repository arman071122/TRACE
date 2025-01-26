<?php
session_start();
// ... your existing code ...

// new code to get data from the certificates table
include "db.php";
$username = $_SESSION['email'];
$query = "SELECT ud.email, ud.Name, c.file_name, c.Activity_head, c.id, c.Activity, c.loa, c.uploaded_on, c.points, c.Approval FROM user_details ud JOIN certificates c ON ud.KTU_ID = c.KTU_ID WHERE ud.email = '$username'";
$result = mysqli_query($con, $query);
$data = array();
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        // do something with the data
        // for example, add it to an array
        $data[] = $row;
    }
} else {
    // handle the error
}

// ... more of your existing code ...
?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> Certificates </title>
        <link rel="stylesheet" href="certificates-style.css">
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
                    <li><a href="dash-home.html">
                    <i class="fas fa-solid fa-file-signature"></i>
                        <span class="nav-item">Certificates</span>
                    </a></li>
                    <li><a href="../dash-home.php" class="back">
                        <i class="fas fa-solid fa-arrow-left"></i>
                        <span class="nav-item">back</span>
                    </a></li>
                </ul>
            </nav>
            <section class="main">
                <div class="main-top">
                    <h1>View</h1>
                    <i class="fas fa-solid fa-file-signature"></i>
                    <div class="main-board">
                        <table class="box">
                            <tr>
                                <th>Sl.no</th>
                                <th>Title</th>
                                <th>Activity_head</th>
                                <th>Activity</th>
                                <th>Level of Achievement</th>
                                <th>upload date</th>
                                <th>points</th>
                                <th>Tutor's approval</th>
                                <th>Preview</th>
                            </tr>
                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $row['file_name'] ?></td>                                
                                    <td><?php echo $row['Activity_head'] ?></td>
                                    <td><?php echo $row['Activity'] ?></td>
                                    <td><?php echo $row['loa'] ?></td>
                                    <td><?php echo $row['uploaded_on'] ?></td>
                                    <td><?php echo $row['points'] ?></td>
                                    <td><?php echo $row['Approval'] ?></td>
                                    <td><a href="../../../Back%20end/files/<?php echo $row['file_name'] ?>">click here</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </section>
		</div>
    </body>
</html>