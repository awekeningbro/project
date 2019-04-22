<?php 
$conn = new mysqli("localhost","root","","php+mysql");
if($conn) {
    echo ("database connection is successful<br/>");
}else {
    header("Location:sysdown.php");
}
?>