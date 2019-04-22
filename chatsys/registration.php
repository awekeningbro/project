<?php 

session_start();

include 'db.php';

$uname = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];


$q = " select * from signup where username = '$uname' OR email = '$email'; ";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);
if($num == 0) {
    $sql = " insert into signup (username,email,password) values('$uname','$email','$pass'); ";
    mysqli_query($conn,$sql);
    echo "<script>alert('Signup was successful!')</script>";
    echo "<script>window.open('login.php','_self')</script>";
}else {
    echo "<script>alert('The username or email already exists in our system. Try again!');</script>";
    echo "<script>window.open('login.php','_self')</script>";
}
?>