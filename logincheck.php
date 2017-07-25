<?php
include('dbconnection.php');
$u_name = $_POST[Firstname];
$u_password = md5($_POST[Password]);
$selectquery = "select * from Phptask where name='$u_name' and password='$u_password'";
$result = mysqli_query($dbcon, $selectquery);
if (mysqli_num_rows($result)== 1) {
    session_start();
    $_SESSION['username']=$u_name;
    header('location:account.php');

} else {
    echo "<h2>'wrong user'</h2>";
}
?>
