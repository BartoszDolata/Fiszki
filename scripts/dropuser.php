<?php
    require_once("connect.php");
    if (isset($_POST['users'])) {
      $login = $_POST['users'];
    $sql = "DELETE FROM `uzytkownik` WHERE `uzytkownik`.`login` = '$login'";
    if (mysqli_query($connect,$sql)) {
      header('location: ../podstrony/deleteusers.php');
    }else{
        echo $login;
}
}
   ?>