<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BootStrap css  -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome css  -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Owl Slider CSS -->
    <link rel="stylesheet" href="css/owlSlider.css">

    <title>SkillBridge</title>
</head>

<body>
    <!-- Start Navigation -->
    <!-- using BootStrap -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ps-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SkillBridge</a>
            <span class="navbar-text">Master-Bridge-Thrive</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav custom-nav ps-5">
                    <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
                    <li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
                    <?php
                    session_start();
                    if(isset($_SESSION["is_login"])) {
                        echo '
                            <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My Profile</a></li>
                            <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
                    } else {
                        echo '
                            <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a></li>
                            <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a></li>';
                    }
                    ?>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
                    <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navigation -->