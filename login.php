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
        <form id="form" > 
           <div>
                <label>E-mail  </label>
                <input type="text" id="emailID" name="Mail" placeholder=" Email"/>
                <div class="message-display emailID hidden"></div> 
            </div>
            <div>
                <label>Password </label>
                <input type="password" id="password" name="Password" placeholder=" Password"/>
                <div class="message-display password hidden"></div> 
            </div> 
               <div><input type="submit" name="submit" id="submit" value="SUBMIT" />
            <div class="message-display submit"></div> 
        </div>
        </form>
          <script src="scriptjquery.js"></script>
    </body>
</html>