<?php
session_start();
$_SESSION['isAdmin'] = true;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal | Amarachi talent academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar">
        <div>
            <h3 class="navbar__logo"><a href="index.php">Amarachi Academy</a></h3>
      </div>
        <ul class="navbar__list">
            <li class="navbar__item">
                <a href="admin.php" class="navbar__item navbar__link">Dashboard</a>
            </li>
            <li class="navbar__item">
                <a href="logout.php" class="navbar__item navbar__link">Logout</a>
            </li>
        </ul>
        <label for="icon" class="navbar__icon" id="icon"><i class="fas fa-bars"></i> </label>
    </nav>
    <div class="slider">
        <div class="slider__bg-overlay"></div>
         <div class="slider__container">
            <h1 class="slider__heading-text"> Control Panel <h1> 
      </div>
     </div>
    <section class="section-admin">
        <div class="container">

            <h3 class="m-b-big">Welcome to Admin Panel.</h3> <br>Please be very careful of how you save your admin panel login details.
            <p>You can Upload Courses Videos, check Registered users and also Add courses here</p>

            <div class="button-logs">
                <div> <a href="upload.php" class="btn primary-btn primary-btn__slideshow">Upload Video</a></div>
                <div> <a href="#registered-user.php" class="btn primary-btn primary-btn__slideshow">Add Courses</a></div>
                <div><a href="#registered-user.php" class="btn primary-btn primary-btn__slideshow">Check Registered Users</a></div>
            </div>
        </div>
    </section>
  <div class="m-b-big"></div>

    <footer class="">
        <div class='footer-flex t-center '>
            <p>Copyright &copy;2020. Amarachi Academy. All rights Reserved</p>
            <p><a class="my-link" href="https://www.linkedin.com/joshuaOyewole"> Powered by Orisfina Tech</a></p>
        </div> 
     </footer>
    <script src="js/app.js"></script>
</body>
</html>

<!--
<?php
session_start();
$_SESSION['isAdmin'] = true;
?>
-->

