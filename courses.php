<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our courses | Amarachi Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">
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
       <h1 class="slider__heading-text"> Courses <h1> 
 </div>
</div>
    <section class="section-course">
       <div class="p-b-medium">
         <div class="heading-text">
               <h1 class="secondary-text secondary-text--course p-t-big">
                  Our Classes
               <h1>
         </div>
         <p class="course-paragraph">
               At Amarachi academy we offer several creative and performing courses for both children and adults. We hold classes in our first class training center built for your taste. All our classes are tauight by industry professionals and are designed to fit around your worrking life, with part time evening, weekend and daytime courses in a wide range of subjects.
         </p>

         <div class="grid-3-1-1-1">
            <div class="course-card">
               <div class="course-card__titile"><h3>Dance</h3></div>
               <div class="course-picture course-picture-p1"></div>
            </div>
            <div class="course-card">
               <div class="course-card__titile"><h3>Football</h3></div>
               <div class="course-picture course-picture-p2"></div>
            </div>
            <div class="course-card">
               <div class="course-card__titile"><h3>Taekwando</h3></div>
               <div class="course-picture course-picture-p3"></div>
            </div>
            <div class="course-card">
               <div class="course-card__titile"><h3>Spoken Words</h3></div>
               <div class="course-picture course-picture-p4"></div>
            </div>
            <div class="course-card">
               <div class="course-card__titile"><h3>Gym</h3></div>
               <div class="course-picture course-picture-p5"></div>
            </div>
            <div class="course-card">
               <div class="course-card__titile"><h3>Music</h3></div>
               <div class="course-picture course-picture-p6"></div>
            </div>
            <div class="course-card">
               <div class="course-card__titile"><h3>Musical Instrument</h3></div>
               <div class="course-picture course-picture-p7"></div>
            </div>
         </div>   
         <?php
            if($_SESSION['isLogIn']){
               echo '<a href="dashboard.php" class="btn primary-btn__courses">Back</a>';
            }
            else{
              echo '<a href="register.php" class="btn primary-btn__courses">Register Now</a>';
            }
         ?>
         
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