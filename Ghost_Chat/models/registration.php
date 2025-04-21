<?php
include 'database.php';

$username=htmlspecialchars ($_POST['username']);
$email=htmlspecialchars ($_POST['email']);
$password=htmlspecialchars ($_POST['password']);

$con=create_connection();

if($con->connect_error){
    die("Connection Failed:".$con->error);
}   

$sql_error="SELECT * FROM user where username='$username' AND email='$email'";
$result=$con->query($sql_error);
$error=0;
if($result->num_rows>0) {
    $error=1;
}

if($error == 0 ){
    $sql="INSERT INTO user VALUES (0, '$username', '$email', '$password')";
   $con->query($sql);    
    
    header("location:../components/login.php");
    
}
else{
    header("location:../components/register.php");
}