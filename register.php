<?php
  include "connect.php";

  session_start();

  $firstname=$lastname=$user_email=$phone_no=$address=$password=$gender=$passport=$dob=$err="";

  function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;  
  }

  if($_SERVER['REQUEST_METHOD'] == "POST"){

     $firstname = test_input($_POST['fname']);
     $lastname = test_input($_POST['lname']);
     $user_email = test_input($_POST['email']);
     $phone_no = test_input($_POST['phone']);
     $address = test_input($_POST['address']);
     $gender = test_input($_POST['gender']);
     $passport = test_input($_POST['passport']);
     $password = md5(test_input($_POST['pword']));
     $dob = test_input($_POST['dob']);
     $date_registered = date("Y/m/d");
     $payment_status = 0;

     $sql = "SELECT * FROM `students` WHERE `phone`='$phone_no'";
     $sql2= "SELECT * FROM `students` WHERE `email`='$user_email'";

     $phone_sql = mysqli_query($conn, $sql);
     $email_sql = mysqli_query($conn, $sql2);

     if(mysqli_num_rows($phone_sql) > 0){
        //Phone no already exist
        $err = "Error! Phone no already exist";
     }

     else if(mysqli_num_rows($email_sql) > 0){
        //Email already exist
        $err = "Error! Email already exist";
     }

     else{
     //PREPARING
     $stmt = $conn->prepare ("INSERT INTO `students` ( `firstname`,`lastname`,`email`,`phone`,`student_address`,`student_password`,`gender`,`passport`,`dob`,`payment_status`,`date_registered`) VALUES (?,?,?,?,?,?,?,?,?,?,?)");

     //BINDING
     $stmt->bind_param("sssssssssis", $firstname, $lastname, $user_email, $phone_no, $address, ($password), $gender,$passport, $dob, $payment_status, $date_registered);
     $stmt->execute();
     $stmt->close();
     $conn->close();

     header("Location:success.php");
     $_SESSION['isRegister'] = true;
     
     }
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include "nav-notLogged.php"; ?>
 <div class="slider">
        <div class="slider__bg-overlay"></div>
            <div class="slider__container">
            <h1 class="slider__heading-text"> REGISTRATION PORTAL<h1> 
        </div>
 </div>
    <section class="section-registration">
       <div class="container p-b-medium">
           <div class="registration-level">
               <span class="registration-level__box">1</span>
               <span class="arrow"></span>
               <span class="registration-level__box">2</span>
           </div>
         <div class="heading-text">
            <p class="p-b-medium">Kindly fill the form below to Register and then proceed to make payment.</p>
               <h1 class="secondary-text secondary-text--course">
                 Registration Form
               </h1>
               <p class="error" style="display:block"><?php echo $err; ?></p>   
                 
         </div>

         <div class="registration-form">
             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="POST" id="reg-form" class="registration">
                 <div class="grid-2-1-1">
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" name="fname" id="fName" class="form-control" placeholder="Enter First Name" required>
                        <small class="error">Error message</small>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" name="lname" id="lName" class="form-control" placeholder="Enter Last Name" required>
                        <small class="error">Error message</small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                        <small class="error">Error message</small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone No:</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required>
                        <small class="error">Error message</small>
                    </div>
                    <div class="form-group">
                        <label for="dob">Date of Birth:</label>
                        <input type="date" name="dob" id="dob" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Address:</label>
                       <textarea name="address" id="address" class="form-control" placeholder="Permanent Address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="name">Password:</label>
                        <input type="password" name="pword" id="password" class="form-control" placeholder="Enter password" required>
                        <small class="error">Error message</small>
                    </div>
                    <div class="form-group">
                        <label for="name">Confrim Password:</label>
                        <input type="password" name="password2" id="password2" class="form-control" placeholder="Enter password again">
                        <small class="error">Error message</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Upload Passport</label>
                        <input type="file" name="passport" id="passport" class="form-control">
                        <small class="error">Error message</small>
                    </div>
                    
                    <div class="form-group form-group--2">
                        <input type="submit" id="register-1" value="NEXT" class="btn primary-btn primary-btn__about-us">
                    </div>
                 </div>
             </form>
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