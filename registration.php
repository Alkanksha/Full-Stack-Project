<?php
session_start();
header('location:login.php');

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'registration');
$name=$con->real_escape_string($_POST['name']);
$email=$con->real_escape_string($_POST['email']);
$country=$con->real_escape_string($_POST['country']);
$password=$con->real_escape_string($_POST['password']);
$hash=password_hash($password,PASSWORD_BCRYPT);
$s="select * from register where email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    echo"Email already registered";
}else{
    $reg="insert into register(name,email,country,password)values('$name','$email','$country','$hash')";
    mysqli_query($con,$reg);
    echo"Registration successful";
}
?>