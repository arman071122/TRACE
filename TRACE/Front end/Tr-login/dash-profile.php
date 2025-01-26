<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8" />
        <title> Profile </title>
        <link rel="stylesheet" href="profile-style.css">
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
                        <i class="fas fa-home"></i>
                        <span class="nav-item">Home</span>
                    </a></li>
                    <li><a href="#" class="act">
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
                    <li><a href="../web login/Login.html" class="logout">
                        <i class="fas fa-sign-out-alt"></i>
                        <span class="nav-item">Logout</span>
                    </a></li>
                </ul>
            </nav>
            <section class="main">
                <div class="main-top">
                    <h1>Profile</h1>
                    <i class="fas fa-user"></i>
                    <div class="main-board">
                        <div class="box">
                            <p class="lab">Name:</p>
                            <p class="val"><?php echo $_SESSION['Name'] ?></p>
                        </div>
                        <div class="box">
                            <p class="lab">KTU ID: </p>
                            <p class="val"><?php echo $_SESSION['ktuid'] ?></p>
                        </div>
                        <div class="box">
                            <p class="lab">Institution: </p>
                            <p class="val"><?php echo $_SESSION['institution'] ?></p>
                        </div>
                        <div class="box">
                            <p class="lab">Mail id: </p>
                            <p class="val"><?php echo $_SESSION['email'] ?></p>
                        </div>
                    </div>
                </div>
            </section>
		</div>
    </body>
</html>