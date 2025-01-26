<?php
session_start();
// ... your existing code ...

// new code to get data from the certificates table
include "db.php";
$username = $_SESSION['email'];
$query = "SELECT* from user_details";
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
        <link rel="stylesheet" href="stud-cert-style.css">
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
                    <i class="fas fa-solid fa-users"></i>
                        <span class="nav-item">Students</span>
                    </a></li>
                    <li><a href="dash-home.html" class="back">
                        <i class="fas fa-solid fa-arrow-left"></i>
                        <span class="nav-item">back</span>
                    </a></li>
                </ul>
            </nav>
            <section class="main">
                <div class="main-top">
                    <h1>View</h1>
                    <i class="fas fa-solid fa-users"></i>
                    <div class="main-board">
                        <table class="box">
                            <tr>
                                <th>KTU_ID</th>
                                <th>Name</th>
                                <th>Year</th>
                                <th>Branch</th>
                                <th>List</th>
                            </tr>
                            <?php foreach ($data as $row): ?>
                                <tr>
                                    <td><?php echo $row['KTU_ID'] ?></td>
                                    <td><?php echo $row['Name'] ?></td>
                                    <td><?php echo $row['Year'] ?></td>
                                    <td><?php echo $row['Branch'] ?></td>
                                    <td><a href="list.php?ktu_id=<?php echo $row['KTU_ID'] ?>">click here</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </section>
		</div>
    </body>
</html>