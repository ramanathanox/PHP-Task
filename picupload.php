<?php
if ($_POST[submit]) {
    echo 'hiiii';
    include ('dbconnection.php');
    /* $profile = ('images/' .basename($_FILES[ProfilePicture]["name"]));
      echo $profile;
      if (preg_match("!image!", $_FILES[ProfilePicture]["type"])) {
      echo 'hi';
      if (copy($_FILES[ProfilePicture][tmp_name], $profile)) {

      $insertphoto = "insert into demo(photo) values($profile)";
     */

    $upload_image = $_FILES[" ProfilePicture "]["name"];
    $folder = "/var/www/html/Phptask/images/";
    move_uploaded_file($_FILES[" ProfilePicture "][" tmp_name "], "$folder" . $_FILES[" ProfilePicture "][" name "]);
    $insertphoto = "insert into demo(photo) values($upload_image)";
    $result = mysqli_query($dbcon, $insertphoto) or die("ERROR!!!!!!!!");
    if ($result) {
        echo 'Data Inserted Success';
    } else {
        echo 'Data Insert Failed!!';
    }
}
?>
