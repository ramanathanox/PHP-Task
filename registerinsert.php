<?php

if ($_POST[submit]) {

    include ('dbconnection.php');
    //if ($_SERVER(request_method) == post) {
    $password = $_POST[Password];
    $confirmpassword = $_POST[confirmPassword];
    if ($password == $confirmpassword) {
        $username = $_POST[Firstname];
        $password = MD5($_POST[Password]);
        $email = $_POST[Mail];
        $mobile = $_POST[Mobile];
        $address = $_POST[address];
        $gender = $_POST[gender];
        $dob = $_POST[DateofBirth];
        $target = "images/";
        $photo = $target . $_FILES['ProfilePicture']['name'];
        var_dump(move_uploaded_file($_FILES['ProfilePicture']['tmp_name'], $target . $_FILES['ProfilePicture']['name']));
        $insertquery = "insert into Phptask(name,password,email,mobile,address,gender,dob,profilepicture)" .
                " values('$username','$password','$email','$mobile','$address','$gender','$dob','$photo')";
        $result = mysqli_query($dbcon, $insertquery) or die("ERROR!!!!!!!!");
        header('location:login.php');
    } else {
        echo "Your password is wrong";
    }
}
//}
?>