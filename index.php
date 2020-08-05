<?php

session_start();

$_SESSION['contactForm'] = true;
$_SESSION['isLogIn'] = false;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amarachi Academy</title>
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

  <header class="slideshow">
    <div class="bg-overlay"></div>
      <div class="slideshow__container">
        <div class="slideshow__text">
            <h1 data-scroll class="slideshow__text--main">
                We Discover, We Nuture, We Promote
                <!-- Discover your hidden talent -->
            </h1>
            <p data-scroll class="slideshow__text--sub">Let's help you discover your talents</p>
        </div>
        <a href="about-us.php" class="btn primary-btn primary-btn__slideshow">Learn More</a>
      </div> 
  </header>


  <section class="intro-section">
      <div class="container">
      <div class="grid-2-1-1">
          <div class="left">
              <div class="composition">
                  <img srcset="img/amarachi-3-large-small.jpg" alt="Ladies training with other sportwomen" class="composition__photo composition__photo--p1" loading="lazy">  
                  <img src="img/amarachi-1-small.jpg" class="composition__photo composition__photo--p2"  alt="young flexible mutliacial woman practicing pilates on fit" loading="lazy">
                  <img src="img/amarachi-2-small.jpg" alt="Woman training to keep herself fit" class="composition__photo composition__photo--p3" loading="lazy">
              </div>
          </div>
          <div class="right" data-scroll>
              <div class="heading-text">
                  <h1 class="heading-text__main">Music, Dance, Taquando, Football Training & More</h1>
                  <p>
                      Amarachi Academy runs a range of creative classes. Choose from Dance, Singing, Spoken words, Music training, Musical instruments,Taquando, Swimming, Gym/Fitness classes, as well as online classes. Open to everyone over 18.
                      Amarachi Academy designs and delivers Communication Skills, Team Talent discovery and Event solutions in-house and at external venues. These enjoyable and practical experiences are inspired by the performing and creative arts, based on our years of experience.
                </p>
              </div>
          </div>
      </div>       
    </div>
  </section>

  <section class="section-courses">
      <div class="container">
    <div class="heading-text">
        <h1 class="heading-text__variety" data-scroll>Our Classes</h1>
    </div>
      <div class="grid-3-1-1-1">
         <div class="courses-box">
                    <div class="courses-box__picture courses-box__picture--p1"></div>
                    <div class="courses-box__heading">
                        <h2 class="courses-box__heading"><span class="courses-box__heading-span courses-box__heading-span-1">Voice </span><span class="courses-box__heading-span courses-box__heading-span-1">Training</span></h2>
             </div>
         </div>
            <div class="courses-box">
                  <div class="courses-box__picture courses-box__picture--p2"></div>
                  <div class="courses-box__heading">
                      <h2 class="courses-box__heading"><span class="courses-box__heading-span courses-box__heading-span-2">Musical </span><span class="courses-box__heading-span courses-box__heading-span-2"> instrument</span></h2>
                  </div>
           </div>
        <div class="courses-box">
              <div class="courses-box__picture courses-box__picture--p3"></div>
              <div class="courses-box__heading">
                  <h2 class="courses-box__heading"><span class="courses-box__heading-span courses-box__heading-span-3">Football </span><span class="courses-box__heading-span courses-box__heading-span-3">Training</span></h2>
              </div>
       </div>
    <div class="courses-box">
          <div class="courses-box__picture courses-box__picture--p4"></div>
          <div class="courses-box__heading">
              <h2 class="courses-box__heading"><span class="courses-box__heading-span courses-box__heading-span-4">Gym </span></h2>
          </div>
   </div>
    <div class="courses-box">
          <div class="courses-box__picture courses-box__picture--p5"></div>
          <div class="courses-box__heading">
              <h2 class="courses-box__heading"><span class="courses-box__heading-span courses-box__heading-span-5">Spoken </span><span class="courses-box__heading-span courses-box__heading-span-5">Words</span></h2>
          </div>
   </div>

    <div class="courses-box">
          <div class="courses-box__picture courses-box__picture--p6"></div>
          <div class="courses-box__heading">
              <h2 class="courses-box__heading"><span class="courses-box__heading-span courses-box__heading-span-6">Dance </span></h2>
          </div>
   </div>
</div>
      <a href="courses.php" class="btn primary-btn__courses" data-scroll>View all Classes</a>
    </div>
  </section>
  <section class="section-testimonial">
      <div class="testimonial container">
        <div class="heading-text">
            <h1 class="heading-text__variety">
                What People are Saying about us
            <h1>
        </div>
        
        <div class="grid-2-1-1">
            <div class="testimonial__img">
                <picture>
                    <source
                        srcset="img/testimonial-3-300.png"
                        media="(max-width:28.75em)">
                   
                        <img src="img/testimonial-3.png" alt="Mr Joe testifying about her child progeress since she started training with us" class="testimonial__img testimonial__img--p1">
                </picture>
    
            </div>
    
                <div class="testimonial__message">
                    <p class="testimonial__content" data-scroll>"If you want a great tutor to help you, Amarachi academy is your best bet. She was my children tutor for a little over a month, and she took them into another level in helping them with Ballalrina and Musical training."</p>
                    <p class="testimonial__name" data-scroll>John Doe, Abuja</p>
                </div>
        </div>

        <!-- <div class="flex">
            <div class="testimonial__img order-2">
                <img src="img/testimonial-2.png" alt="Mr Joe testifying about her child progeress since she started training with us" class="testimonial__img testimonial__img--p2">
            </div>
        
                <div class="testimonial__message">
                    <p class="testimonial__content" data-scroll>"If you want a great tutor to help you, Amarachi academy is yout best bet. She was my children tutor for a little over a month, and he took them into another level in helping them with Ballalrina and Musical training."</p>
                    <p class="testimonial__name" data-scroll>Mr. Bella, United State</p>
                </div>
        </div>

        <div class="flex">
            <div class="testimonial__img">
                <img src="img/testimonial-3.png" alt="Mr Joe testifying about her child progeress since she started training with us" class="testimonial__img testimonial__img--p3">
            </div>

                <div class="testimonial__message">
                    <p class="testimonial__content" data-scroll>"If you want a great tutor to help you, Amarachi academy is yout best bet. She was my children tutor for a little over a month, and he took them into another level in helping them with Ballalrina and Musical training."</p>
                    <p class="testimonial__name" data-scroll>Mr Bella, Benin City</p>
                </div>
            </div> -->
      </div>
  </section>

  <section class="section-cta">
      <div class="container cta">
          <div class="flex justify-content-flex-start">
            <div class="cta__text-box" data-scroll>
                <h3 class="cta__text-box__discount">Discount</h3>
                <h2 class="cta__text-box__heading">15% off</h2>
                <p class="cta__text-box__para">Join thousands of students exploring our courses worldwide.
                    What are you waiting for?
                </p>
                <a href="register.php" class="btn primary-btn primary-btn__slideshow">Join Now</a>
            </div>

          </div>
      </div>
  </section>

  <section class="section-gallery">
            <div class="heading-text">
                <h1 class="heading-text__variety">
                    Gallery
                <h1>
            </div>
            <div class="gallery" data-scroll>
                <a href="img/gallery-img-1" class="gallery__img gallery__img--p1">
                    <img src="img/gallery-img-1.jpg" alt="Amarachi performing at her peak" class="gallery__img ">
                </a>

                <a href="img/gallery-img-2" class="gallery__img gallery__img--p2">
                    <img src="img/gallery-img-2.jpg" alt="A student of Amarachi academy playing violin" class="gallery__img ">
                </a>

                <a href="img/gallery-img-3" class="gallery__img gallery__img--p3">
                    <img src="img/gallery-img-3.jpg" alt="3 children from amarachi academy doing a split while playing musical instruments" class="gallery__img ">
                </a>
                
                <a href="img/gallery-img-4" class="gallery__img gallery__img--p4">
                    <img src="img/gallery-img-6.jpg" alt="Amarachi academy kids doing gymnastics" class="gallery__img ">
                </a>

                <a href="img/gallery-img-5" class="gallery__img gallery__img--p5">
                    <img src="img/gallery-img-5.jpg" alt="Amarachi academy kids doing amazing acrobatics" class="gallery__img ">
                </a>

                <a href="img/gallery-img-6" class="gallery__img gallery__img--p6">
                    <img src="img/gallery-img-4.jpg" alt="Amarachi academy playground for sport and other related field activities" class="gallery__img ">
                </a>

                <a href="img/gallery-img-7" class="gallery__img gallery__img--p6">
                    <img src="img/gallery-img-7.jpg" alt="Amarachi academy playground for sport and other related field activities" class="gallery__img ">
                </a>
            </div>
  </section>

  <section class="section-contact">
      <div class="container">
    <div class="contact">
        <div class="contact__form">
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
        <div class="contact__text contact__text--p1">
            <h3 class="contact__text--main t-center">Have a Question?</h3>
            <p class="contact__text--sub">Get in Touch with us</p>
        </div>
    </div>  
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
               <li><i class="fab fa-youtube"></i><a href='http://youtube.com/amarachidance8'> Youtube</a></li>
                <li><i class="fab fa-twitter"></i><a href='http://twitter.com/amarachidance8'> Twitter</a></li>
                <li><i class="fab fa-instagram"></i><a href='http://instagram.com/amarachidance8'> Instagram</a></li>
                <li><i class="fab fa-facebook"></i><a href='http://facebook.com/amarachidance8'> Facebook</a></li>
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
<script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
   <script>ScrollOut();</script> 
    <script src="js/app.js"></script>
</body>
</html>