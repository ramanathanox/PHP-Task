<?php
session_start();
if ($_SESSION['username']) {
    header('location:account.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formstyle.css">
    </head>
    <body bgcolor="#F8F8FF">
        <h1>Welcome</h1> 
        <a href="register.php"><input type="submit" name="submit" id="register" value="Register" /></a>
        <a href="login.php"><input type="submit" name="submit" id="login" value="Login" /></a>
            <?php
            include 'dbconnection.php';
            $userinfo = "select name,mobile,email from Phptask";
            $result = mysqli_query($dbcon, $userinfo);
            echo "<table width='50%' align='center' border='2px' ><th>Name</th><th>Mobile</th><th>Email</th>";
            while ($rows = mysqli_fetch_array($result)) {
                echo '<tr align="center">';
                echo '<td >' . $rows['name'] . '</td>';
                echo '<td>' . $rows['mobile'] . '</td>';
                echo '<td>' . $rows['email'] . '</td>';
                echo '</tr>';
            }
            ?>

    </body>
</html>
