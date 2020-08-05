<?php
$servername='localhost';
$username='root';
$password = '';
$database = 'amarachi-academy';

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    echo "Error connecting to Database!";
}

   
?>