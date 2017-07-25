
<html>
    <head>
        <title>Login Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formstyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body bgcolor="#F8F8FF">
        <h1>LOGIN FORM</h1>
        <form id="form" action="logincheck.php" method='post'> 
            <div>
                <label>Name  </label>
                <input type="text" id="firstName" name="Firstname"  placeholder=" Name" />
                <div class="message-display firstName hidden"></div> 
            </div>
            <div>
                <label>Password </label>
                <input type="password" id="password" name="Password" placeholder=" Password"/>
                <div class="message-display password hidden"></div> 
            </div> 
            <div><input type="submit" name="submit" id="submit" value="SUBMIT" />
                <div class="message-display submit"></div> 
            </div>
            <p class="notmember">already not a member <a href="register.php">Register here!</a> Here</p>
        </form>
        <script src="scriptjquery.js"></script>
        <div> 
        </div>
    </body>
   
</html>