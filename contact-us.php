<?php

session_start();
$_SESSION['contactForm'] = true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
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
            <a href="index.php" class="navbar__item navbar__link">Home</a>
        </li>
        <li class="navbar__item">
            <a href="about-us.php" class="navbar__item navbar__link">Who we are</a>
        </li>
        <li class="navbar__item">
            <a href="courses.php" class="navbar__item navbar__link">Courses</a>
        </li>
        <li class="navbar__item">
            <a href="login.php" class="navbar__item navbar__link">Login</a>
        </li>
    </ul>
    <label for="icon" class="navbar__icon" id="icon"><i class="fas fa-bars"></i> </label>
</nav>
    <section class="section-contact-us">
       <div class="container p-b-medium">
         <div class="heading-text">
               <h1 class="secondary-text secondary-text--course">
                  Contact us
               <h1>
         </div>
         <div class="contact contact__form--p2">
            <div class="contact__form contact__form--p2">
                <form action="contact-request-sent.php" method='GET' id="contactForm">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control form-control--email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="msg" id="msg" class="form-control form-control--msg" required></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn primary-btn primary-btn__about-us">
                </div>
            </form>
            </div>
            <div class="contact__text contact__text--p2 t-center">
                <p class="contact__text--sub p-b-small">Amarachi Academy,</p>
                <p>32 Amarachi, Avenu, Benin city Nigeria</p>
                <p class="contact__text--sub p-b-small">+234(7032054367)</p>
                <p class="contact__text--sub p-b-small">info@amarachiacademy.com</p>
            </div>
        </div> 
       </div>
    </section>
    <footer>
        <div class='footer-flex t-center'>
            <p>Copyright &copy;2020. Amarachi Academy. All rights Reserved</p>
            <p><a class="my-link" href="https://www.linkedin.com/joshuaOyewole"> Powered by Orisfina Tech</a></p>
        </div> 
    </footer>
    
    <script src="js/app.js"></script>
</body>
</html>