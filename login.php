<?php
 include "connect.php";

 session_start();

 $err = "";

 function sessionstart($lifetime, $path, $domain, $secure, $httpOnly){
  session_set_cookie_params($lifetime, $path, $domain, $secure, $httpOnly);
  session_start();
}

 function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;  
}

 if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $user_email = test_input($_POST['email']);
    $password = md5(test_input($_POST['pword']));

    //PREPARING
    $stmt = $conn->prepare ("SELECT `email`, `student_password` FROM `students` WHERE `email`=? && `student_password` =?");

    //BINDING
    $stmt->bind_param("ss", $user_email, $password);
    $stmt->execute();
    $res = $stmt->get_result();


    if( $res->num_rows > 0){
      //if Email and password is correct, redirect to dashboard
      header('Location:dashboard.php');
      sessionStart(0,'/',localhost, false, true);
      $_SESSION['isLogged'] = true;
      $_SESSION['isRegister'] = true;
      $_SESSION['id'] = $user_email;
   }
   else{
      $err= "Incorrect email or Password!";
   }

    $stmt->close();
    $conn->close();

 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Amarachi Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   <?php include "nav-notLogged.php" ?>
    <section class="section-login">
        <div class="container flex">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"   class="form-login">
            <p class="error" style="display:block"><?php echo $err; ?></p> 
                <div class="form-control-2">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email">
                </div>
    
                <div class="form-control-2">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="pword" placeholder="Password">
                </div>
    
                <div class="checkbox-container">
                   <!--  <input type="checkbox" id="remember">
                    <label for="remember">Remember me</label> -->
    
                    <a href="#" class="fp">Forgot Password</a>
                </div>

                <input type="submit" class="bttn" value="Log In" name="login-btn">
        
                <small>Don't have an account? <a href="register.php">Sign up</a></small>
            </form>
    
            <div class="features">
                <div class="feature">
                    <i class="fas fa-code"></i>
                    <h2 class="t-center">Welcome Back</h2>
                    <p class="t-center">To keep connecting with us kindly login with your personal to continue exploring our course.</p>
                </div>
            </div>
        </div>
    </section>
<div class="p-t-medium"></div>
    <footer class="f-display-bottom">
        <div class='footer-flex t-center'>
            <p>Copyright &copy;2020. Amarachi Academy. All rights Reserved</p>
            <p>Powered by Orisfina Tech</p>
        </div> 
    </footer>
    <script src="js/app.js"></script>
</body>
</html>