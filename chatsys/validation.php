<?php 

session_start();

include 'db.php';

$uname = $_POST['username'];
$pass = $_POST['password'];

$q = " select * from signup where username = '$uname' AND password = '$pass'; ";
$result = mysqli_query($conn,$q);
$num = mysqli_num_rows($result);
if($num == 1) {
    echo "Login was successful!<br/>";
    echo "hello user, $uname!";
    $_SESSION['username'] = $uname;
    header("location:home.php");
}else {
    echo "This username doesn't exist in our system...<br/>";
    header("location:userdontexist.php");
}
?>