<?php

$course_categories = "<div class='course-category'>
    <h3 class='course-category__heading p-b-big'>Course category</h3>
    <div class='course-category__container'>
       <div class='course-category__btn course-category__btn--1'>
          <a href='#dance' class='course-category__button'>Dance</a>
       </div>
       <div class='course-category__btn course-category__btn--2'>
          <a class='course-category__button'>Voice Training</a>
       </div>
       <div class='course-category__btn course-category__btn--3'>
          <a class='course-category__button'>Musical Instrument</a>
       </div>
       <div class='course-category__btn course-category__btn--4'>
          <a class='course-category__button'>Gym</a>
       </div>
       <div class='course-category__btn course-category__btn--5'>
          <a class='course-category__button'>Football Training</a>
       </div>
       <div class='course-category__btn course-category__btn--6'>
          <a class='course-category__button'>Spoken Words</a>
       </div>
       <div class='course-category__btn course-category__btn--7'>
          <a class='course-category__button'>Others</a>
       </div>
    </div>
   </div>";

   $notpaidtext = "<p class='course-paragraph'> Thank you for Registering and showing your desire to be a member of this great academy. Kindly proceed to our payment portal to make payments and gain  access to our rich catalogue of courses prepared for you. Our online courses are very friendly and entertaining. </p><a  href='#' class='btn primary-btn__courses'>Proceed</a>";

session_start();
$_SESSION['isLogIn'] = true;

include "connect.php";

if(!$_SESSION['isLogged']){
   header('Location:404.php');
   die();
}

$ids = $_SESSION['id'];

   //DECLARATION BLOCKS
   $dance_path = 'Videos/category/dance/';
   $football_path = 'Videos/category/football/';
   $gym_path = 'Videos/category/gym/';
   $musical_inst_path = 'Videos/category/musical_instrument/';
   $others_path = 'Videos/category/others/';
   $spoken_words_path = 'Videos/category/spoken_words/';
   $voice_training_path = 'Videos/category/voice_training/';
   $taekwando_path = 'Videos/category/taekwando/';


//FETCH USER PAYMENT STATUS FROM DATABASE USING HIS EMAIL ADDRESS AS A POINT OF QUERY   
   //PREPARING
   $stmt = $conn->prepare ("SELECT * FROM `students` WHERE `email`=?");

   //BINDING
   $stmt->bind_param("s", $ids);
   $stmt->execute();
   $res = $stmt->get_result();
   $row = $res->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Portal | Amarachi academy</title>
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
              <a href="dashboard.php" class="navbar__item navbar__link">Dashboard</a>
          </li>
          <li class="navbar__item">
              <a href="#" class="navbar__item navbar__link">Print Form</a>
          </li>
          <li class="navbar__item">
              <a href="logout.php" class="navbar__item navbar__link">Logout</a>
          </li>
      </ul>
      <label for="icon" class="navbar__icon" id="icon"><i class="fas fa-bars"></i> </label>
  </nav>

  <!--HEADER SLIDER-->
  <div class="slider">
     <div class="slider__bg-overlay"></div>
      <div class="slider__container">
         <h1 class="slider__heading-text"> Explore Our Course <h1> 
   </div>
  </div>

<!--MAIN SESSION -->
   <section class="section-course">
        <div class="heading-text">
              <h1 class="secondary-text secondary-text--course m-t-big">
                STUDENT DASHBOARD 
              <h1> 
        </div>



   <?php
       //IF PAYED DISPLAY THIS || IF PAYMENT IS TRUE THEN FETCH COURSES FROM DATABASE 
       if($row['payment_status']){
         //IF PAYMENT IS TRUE THEN FETCH COURSES FROM DATABASE
         $stmt = $conn->prepare ("SELECT `video_tittle`, `video_desc`, `category`, `video_filename`, `fileextension` FROM `videos` ORDER BY `videoID` LIMIT 100");
     
         $stmt->execute();
         $res = $stmt->get_result();
         $data = $res->fetch_all(MYSQLI_ASSOC);
     
          //CHECK IF COURSES HAVE BEEN UPLOADED IN THE DATABASE
           
          if($data){ //IF THERE ARE UPLOADED COURSE THEN FETCH THE VIDEO AND DETAILS OF THE VIDEOS
           //DISPLAY VARIOUS COURSE CATEGORIES BUTTON
           echo $course_categories;
     
        //CATEGORY OF VIDEOS FOR DANCE 
        echo "<div class='course-category__video-container' id='others'>";
            foreach ($data as $row) {
            //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
            if(($row['category']) == 'dance'){
      
            $video_desc = $row['video_desc'];
            $category = $row['category'];
            $video_title = $row['video_tittle'];
            $video_name = $row['video_filename'];
            $fileextenstion = $row['fileextension'];
   

            echo "<div class='course-category__video-container--content'><video width='320' src='" .$dance_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
            }
         }
         echo "</div>";

         //CATEGORY OF VIDEOS FOR VOICE TRAINING
        echo "<div class='course-category__video-container' id='voice_training'>";
        foreach ($data as $row) {
        //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
        if(($row['category']) == 'voice_training'){
  
        $video_desc = $row['video_desc'];
        $category = $row['category'];
        $video_title = $row['video_tittle'];
        $video_name = $row['video_filename'];
        $fileextenstion = $row['fileextension'];


        echo "<div class='course-category__video-container--content'><video width='320' src='" .$voice_training_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
        }
     }
     echo "</div>";

     //CATEGORY OF VIDEOS FOR MUSICAL INSTRUMENT
            echo "<div class='course-category__video-container' id='musical_instrument'>";
            foreach ($data as $row) {
            //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
            if(($row['category']) == 'musical_instrument'){

            $video_desc = $row['video_desc'];
            $category = $row['category'];
            $video_title = $row['video_tittle'];
            $video_name = $row['video_filename'];
            $fileextenstion = $row['fileextension'];


            echo "<div class='course-category__video-container--content'><video width='320' src='" .$musical_inst_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
            }
         }
         echo "</div>";


     //CATEGORY OF VIDEOS FOR GYM
               echo "<div class='course-category__video-container' id='gym'>";
               foreach ($data as $row) {
               //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
               if(($row['category']) == 'gym'){

               $video_desc = $row['video_desc'];
               $category = $row['category'];
               $video_title = $row['video_tittle'];
               $video_name = $row['video_filename'];
               $fileextenstion = $row['fileextension'];


               echo "<div class='course-category__video-container--content'><video width='320' src='" .$gym_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
               }
            }
            echo "</div>";
            
     
    //CATEGORY OF VIDEOS FOR taekwando
               echo "<div class='course-category__video-container' id='taekwando'>";
               foreach ($data as $row) {
               //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
               if(($row['category']) == 'taekwando'){

               $video_desc = $row['video_desc'];
               $category = $row['category'];
               $video_title = $row['video_tittle'];
               $video_name = $row['video_filename'];
               $fileextenstion = $row['fileextension'];


               echo "<div class='course-category__video-container--content'><video width='320' src='" .$taekwando_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
               }
            }
            echo "</div>";

      //CATEGORY OF VIDEOS FOR football
               echo "<div class='course-category__video-container' id='football'>";
               foreach ($data as $row) {
               //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
               if(($row['category']) == 'football'){

               $video_desc = $row['video_desc'];
               $category = $row['category'];
               $video_title = $row['video_tittle'];
               $video_name = $row['video_filename'];
               $fileextenstion = $row['fileextension'];


               echo "<div class='course-category__video-container--content'><video width='320' src='". $football_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
               }
            }
            echo "</div>";

      //CATEGORY OF VIDEOS FOR $spoken_words_path
               echo "<div class='course-category__video-container' id='spoken_words'>";
               foreach ($data as $row) {
               //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
               if(($row['category']) == 'spoken_words'){

               $video_desc = $row['video_desc'];
               $category = $row['category'];
               $video_title = $row['video_tittle'];
               $video_name = $row['video_filename'];
               $fileextenstion = $row['fileextension'];


               echo "<div class='course-category__video-container--content'><video width='320' src='" .$spoken_words_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
               }
            }
            echo "</div>";

         //CATEGORY OF VIDEOS FOR OTHERS
         echo "<div class='course-category__video-container' id='others'>";
            foreach ($data as $row) {
            //CHECK EACH CATEGORY TO DISPLAY DATAS RELATING TO THAT CATEGORY
            if(($row['category']) == 'others'){
      
            $video_desc = $row['video_desc'];
            $category = $row['category'];
            $video_title = $row['video_tittle'];
            $video_name = $row['video_filename'];
            $fileextenstion = $row['fileextension'];
   

            echo "<div class='course-category__video-container--content'><video width='320' src='" .$others_path .$video_name ."' controls></video><br><h4>" . $video_title . "</h4><small>" . $video_desc . "</small><br><br></div>";
            }
         }
         echo "</div>";
     }
      }
        
       // IF NOT PAID DISPLAY THIS
        else{
         echo $notpaidtext; 
        }
   ?>



   </section>
<!--END OF MAIN SESSION -->
   <footer class="">
      <div class='footer-flex t-center'>
          <p>Copyright &copy;2020. Amarachi Academy. All rights Reserved</p>
          <p><a class="my-link" href="https://www.linkedin.com/joshuaOyewole"> Powered by Orisfina Tech</a></p>
      </div> 
  </footer>
  <script src="js/app.js"></script>
</body>
</html>