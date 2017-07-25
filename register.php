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
        <form id="form" action="post"> 
            <div>
                <label> Name </label>
                <input type="text" id="firstName" name="Firstname"  placeholder=" Name" />
                <div class="message-display firstName hidden"></div> 
            </div> 
            <div>
                <label>Password </label>
                <input type="password" id="password" name="Password" placeholder=" Password"/>
                <div class="message-display password hidden"></div> 
            </div> 
            <div>
                <label>Confirm Password</label>
                <input type="password" id="confirm-password" name="confirm-Password" placeholder="Confirm-Password"/>
                <div class="message-display confirm-password hidden"></div> 
            </div> 
            <div>
                <label>Email </label>
                <input type="email" id="emailID" name="Mail" placeholder=" Email ID"/>
                <div class="message-display emailID hidden"></div> 
            </div>
            <div>
                <label>Mobile </label>
                <input type="text" id="mobileNumber" name="Mobile" placeholder=" Mobile Number"/>
                <div class="message-display mobileNumber hidden"></div> 
            </div>
            <div><label>Address </label>
                <textarea id="address" placeholder=" --Address--"></textarea>
                <div class="message-display address hidden"></div> 
            </div>
            <div><label>Gender </label>
                <input type="radio" name="gender" id="gender" value="male"><span>Male</span>  
                <input type="radio" name="gender" id="gender" value="female"/><span>Female</span>
                <div class="message-display gender hidden"></div> 
            </div> 
            <div>
                <label>Date of Birth </label>
                <input type="date" id="dateofbirth" name="DateofBirth"  placeholder="dd/mm/yyyy" />
                <div class="message-display dateofbirth hidden"></div> 
            </div> 
            <div>
                <label>Choose your Profile </label>
                <input type="file" id="profilePicture" name="ProfilePicture" accept="image/*" placeholder="Profile" />
                <div class="message-display profilePicture hidden"></div> 
            </div> 
            <div><input type="submit" name="submit" id="submit" value="SUBMIT" />
                <div class="message-display submit"></div> 
            </div>

        </form>
        <script src="scriptjquery.js"></script>
    </body>
</html>


