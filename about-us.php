<?php

session_start();
$_SESSION['contactForm'] = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <?php
    if($_SESSION['isLogIn']){
        include 'nav-login.php';
    }
    else{
        include 'nav-notLogged.php';
    }
?>
    <div class="slider">
        <div class="slider__bg-overlay"></div>
         <div class="slider__container">
            <h1 class="slider__heading-text"> Who we Are <h1> 
      </div>
     </div>
    <section class="section-about">
       <div class="container p-b-medium">
         <div class="heading-text">
               <h1 class="secondary-text secondary-text--course">
                  About us
               <h1>
         </div>
         <p class="course-paragraph">
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, praesentium, in asperiores atque omnis rem rerum ea voluptatem aliquam id eum error repudiandae inventore beatae, ipsa obcaecati sed voluptatibus libero! Sit, ratione? Porro impedit et molestiae tempora blanditiis deserunt quibusdam ipsum odio. Facilis, dolores obcaecati quae sint hic, nihil magnam nam dignissimos assumenda esse fugit dolorem cupiditate totam ex. Esse impedit qui labore veniam, quasi accusamus obcaecati repellendus inventore? Rem tempora provident ratione, quibusdam delectus aut asperiores quisquam neque tenetur quo? Error rerum culpa cupiditate dignissimos recusandae veniam nihil exercitationem corporis, deserunt, modi harum aliquid laboriosam natus? Et, veniam illo?
         </p>

         <div class="heading-text">
            <h1 class="secondary-text secondary-text--course">
               Why choose us
            <h1>
      </div>
      <p class="course-paragraph">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, praesentium, in asperiores atque omnis rem rerum ea voluptatem aliquam id eum error repudiandae inventore beatae, ipsa obcaecati sed voluptatibus libero! Sit, ratione? Porro impedit et molestiae tempora blanditiis deserunt quibusdam ipsum odio. Facilis, dolores obcaecati quae sint hic, nihil magnam nam dignissimos assumenda esse fugit dolorem cupiditate totam ex. Esse impedit qui labore veniam, quasi accusamus obcaecati repellendus inventore? Rem tempora provident ratione, quibusdam delectus aut asperiores quisquam neque tenetur quo? Error rerum culpa cupiditate dignissimos recusandae veniam nihil exercitationem corporis, deserunt, modi harum aliquid laboriosam natus? Et, veniam illo?
      </p>
      <a href="courses.php" class="btn primary-btn__about-us">View Courses</a>
       </div>
    </section>
    <section class="sub-footer">
        <div class="container grid-3">
      <div class="sub-footer__box">
          <h3 class="sub-footer__heading">Our Classes</h3>
          <div class="sub-footer__links">
              <ul>
                  <li><a href='courses.php'>Dance</a></li>
                  <li><a href='courses.php'>Vocal Training</a></li>
                  <li><a href='courses.php'>Ballet</a></li>
                  <li><a href='courses.php'>Football</a></li>
                  <li><a href='courses.php'>Taquando</a></li>
                  <li><a href='courses.php'>Music Instruments</a></li>
              </ul>
          </div>
      </div>
      <div class="sub-footer__box">
          <h3 class="sub-footer__heading">About us</h3>
          <div class="sub-footer__links">
              <ul>
                  <li><a href='#'>Our Mission</a></li>
                  <li><a href='#'>Our Vision</a></li>
                  <li><a href='about-us.php'>About</a></li>
                  <li><a href='#'>FAQ</a></li>
              </ul>
          </div>
      </div>
   <div class="sub-footer__box">
          <h3 class="sub-footer__heading">Social Media</h3>
          <div class="sub-footer__links">
              <ul>
                 <li><i class="fab fa-youtube"></i><a href='http://youtube.com/amarachi'> Youtube</a></li>
                  <li><i class="fab fa-twitter"></i><a href='http://twitter.com/amarachi'> Twitter</a></li>
                  <li><i class="fab fa-instagram"></i><a href='http://instagram.com/amarachidance8  '> Instagram</a></li>
                  <li><i class="fab fa-facebook"></i><a href='http://instagram.com/amarachidance8'> Facebook</a></li>
              </ul>
          </div>
      </div> 
      <div class="sub-footer__box">
          <h3 class="sub-footer__heading">Contact us</h3>
          <div class="sub-footer__links">
              <ul>
                  <li>
                      <i class="fas fa-map-marker-alt"></i>
                      22, Giwa Amu street, Off Airport Road, By Benoni Junction, G.R.A., Benin City Nigeria
                  </li>
                  <li> <i class="fas fa-mobile-alt"></i> +2348121536986, +2348071279834, +2347030433056</li>
                  <li><i class="far fa-envelope"></i> info@amarachiacademy.com</li>
              </ul>
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