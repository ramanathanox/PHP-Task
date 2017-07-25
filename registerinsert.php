<?php

if ($_POST[submit]) {

    include ('dbconnection.php');
    //if ($_SERVER(request_method) == post) {  
    if ($_POST[password] == $_POST[confirmpassword]) {
        $username = $_POST[Firstname];
        $password = MD5($_POST[Password]);
        $email = $_POST[Mail];
        $mobile = $_POST[Mobile];
        $address = $_POST[address];
        $gender = $_POST[gender];
        $dob = $_POST[DateofBirth];

//                                                  echo $username;
//                                                  echo $password;
//                                                  echo $email;
//                                                  echo $mobile;
//                                                  echo $address;
//                                                  echo $gender;
//                                                  echo $dob;
        /*  $profile=('image/'.$_FILES['#profilePicture']['name']);

          if(pre_match('!image!',$_FILES['#profilePicture']['type']))
          {
          if(copy($_FILES['#profilePicture']['tmp_name'],$profile))
          {
         */




        $insertquery = "insert into Phptask(name,password,email,mobile,address,gender,dob) values('$username','$password','$email','$mobile','$address','$gender','$dob')";
        $result = mysqli_query($dbcon, $insertquery) or die("ERROR!!!!!!!!");
        header('location:login.php');
    }
} else {
    alert("Your password is wrong");
}
//}
//                }
//            }
?>