<?php
$session=session_start();
if(isset($_POST['button'])&& !empty($_POST['login']) && !empty($_POST['password'])){
   
    $login=$_POST['login'];
    $password=$_POST['password'];
    require_once("./connect.php");
    $sql = "SELECT `haslo` FROM `uzytkownik` WHERE `login`=$login";
    $result =  mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $pswd=$row['haslo'];
    }
    echo $pswd;
    if(password_verify($password,$row)){
        echo $row;
    } else {
        echo $result;
    }

    //echo password_hash('admin123',PASSWORD_BCRYPT);
} else {
    header('location: ../podstrony/sets.php');
}

?>