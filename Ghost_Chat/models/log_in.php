<?php

session_start();

require 'database.php';

$un=htmlspecialchars ($_POST['username']);

$pass=htmlspecialchars ($_POST['pass']);

$con=create_connection();

if($con->connect_error){
    die("Connection Failed:".$con->error);
}   

$sql_uname="SELECT * FROM user where username='$un' AND password='$pass'";
$result_uname=$con->query($sql_uname);

if($result_uname->num_rows>0) {
    $row=$result_uname->fetch_assoc();
    $_SESSION['sid']=$row['sid'];
    $_SESSION['username']=$row['username'];
    $_SESSION['email']=$row['email'];
    
    header("location:../components/loggedin.php");
}
else {
    header("location:../components/login.php");
}