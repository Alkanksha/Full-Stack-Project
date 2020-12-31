<?php
session_start();


$con=mysqli_connect('localhost','root','','registration');
$email=$con->real_escape_string($_POST['email']);
$password=$con->real_escape_string($_POST['password']);
$error="Username/Password Incorrect";

$s="select * from register where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $row=mysqli_fetch_array($result);
    $password_hash=$row['password'];
    if(password_verify($password,$password_hash)){
        $_SESSION['email']=$email;
        header('location:home.php');
    }else{
        $_SESSION["error"]=$error;
        header('location:login.php');
    }
}else{
    $_SESSION["error"]=$error;
    header('location:login.php');
}
?>