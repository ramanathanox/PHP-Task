<?php
session_start();
if ($_SESSION['username']) {
    header('location:account.php');
}
?>
<html>
    <head>

        <title>Registration Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formstyle.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body  bgcolor="#F8F8FF">
        <h1>REGISTRATION FORM</h1>
        <form id="form" method="post" action='registerinsert.php' enctype="multipart/form-data"> 
            <div>
                <label> Name </label>
                <input type="text" id="firstName" name="Firstname"  placeholder=" Name" />
                <span id="firstNameerror"></span> 
            </div> 
            <div>
                <label>Password </label>
                <input type="password" id="password" name="Password" placeholder=" Password"/>
                <span id="passworderror"></span>
            </div> 
            <div>
                <label>Confirm Password</label>
                <input type="password" id="confirmpassword" name="confirmPassword" placeholder="Confirm-Password"/>
                <span id="confirmpassworderror"></span>
            </div> 
            <div>
                <label>Email </label>
                <input type="email" id="emailID" name="Mail" placeholder=" Email ID"/>
                <span id="emailIDerror"></span>
            </div>
            <div>
                <label>Mobile </label>
                <input type="text" id="mobileNumber" name="Mobile" placeholder=" Mobile Number"/>
                <span id="mobileNumbererror"></span>
            </div>
            <div><label>Address </label>
                <textarea id="address" name='address' placeholder=" --Address--"></textarea>
                <span id="addresserror"></span> 
            </div>
            <div><label>Gender </label>
                <input type="radio" name="gender" id="gender" value="male"><span>Male</span>  
                <input type="radio" name="gender" id="gender" value="female"/><span>Female</span>
                <span id="gendererror"></span>
            </div> 
            <div>
                <label>Date of Birth </label>
                <input type="date" id="dateofbirth" name="DateofBirth"  placeholder="dd/mm/yyyy" />
                <span id="dateofbirtherror"></span>
            </div> 
            <div>
                <label>Choose your Profile </label>
                <input type="file" id="profilePicture" name="ProfilePicture" accept="image/*" placeholder="Profile" />
                <span id="profilePictureerror"></span>
            </div> 
            <div><input type="submit" name="submit" id="submit" value="SUBMIT" />
                <div class="message-display submit"></div> 
            </div>
            <p class="notmember">already a member <a href="login.php">Login here!</a> </p>

        </form>
        <script src="scriptjquery.js"></script>

    </body>
</html>


