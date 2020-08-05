
<?php
include "connect.php";
session_start();

    if(!$_SESSION['contactForm']){
    header('Location:404.php');
    }

    function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;  
    }

    
if($_SERVER['REQUEST_METHOD'] == 'GET'){

   $user_messgae = test_input($_GET['msg']);
   $user_email = test_input($_GET['email']);

   if(empty($user_email) && empty($user_messgae)){
    header("Location:404.php"); 
   }

   else{

   /*STATUS
   1 - ANSWERED
   0 - NOT YET ANSWERED
   */
   $msg_status = 0;

   //PREPARING
   $stmt = $conn->prepare ("INSERT INTO `request` (`userEmail`,`userMessage`,`status`) VALUES (?,?,?)");
   //BINDING
   $stmt->bind_param("ssi", $user_email, $user_messgae, $msg_status);
   $stmt->execute();
   $stmt->close();
   $conn->close();

    $successMsg = '<div class="center-div"><h1 class="t-center p-b-medium p-t-medium">Success </h1>  
    <p>Your message has been successfully sent. We will get back to you as soon as possible</p><h4>Thank you</h4><a href="index.php" class="btn primary-btn__courses">Return Home</a></div>';

}
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Sent | Amarachi talent Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;0,800;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
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

<div class="container">
    <?php echo $successMsg; ?>
    <?php echo $err; ?>
</div>
<div class="m-t-medium"></div>
<footer class="f-display-bottom">
    <div class='footer-flex t-center '>
        <p>Copyright &copy;2020. Amarachi Academy. All rights Reserved</p>
        <p><a class="my-link" href="https://www.linkedin.com/joshuaOyewole"> Powered by Orisfina Tech</a></p>
    </div> 
 </footer>
 <script src="js/app.js"></script>
</body>
</html>

