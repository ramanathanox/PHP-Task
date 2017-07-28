<?php
session_start();
if ($_SESSION['username']) {
    header('location:account.php');
}
?>
<html>
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formstyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="loginscript.js"></script>
    </head>
    <body bgcolor="#F8F8FF">
        <h1>LOGIN FORM</h1>
        <form id="form" action="logincheck.php" method='post'> 
            <div>
                <label>Name  </label>
                <input type="text" id="firstName" name="Firstname"  placeholder=" Name" />
                <span id="firstNameerror"></span> 
            </div>
            <div>
                <label>Password </label>
                <input type="password" id="password" name="Password" placeholder=" Password"/>
                <span id="passworderror"></span>
            </div> 
            <div><input type="submit" name="submit" id="submit" value="SUBMIT" /></div>
            <p class="notmember">already not a member <a href="register.php">Register here!</a> Here</p>
        </form>    
    </body>

</html>