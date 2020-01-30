<?php

if(isset($_POST['button'])&& !empty($_POST['login']) && !empty($_POST['password'])){

    $login=$_POST['login'];
    $password=$_POST['password'];
    require_once("./connect.php");
    $sql = "SELECT * FROM `uzytkownik` WHERE `login`=\"$login\"";
    $result =  mysqli_query($connect,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $pswd = $row['haslo'];
            $function = $row['funkcja_id'];
            $status = $row['status_id'];
            $class = $row['klasa_id'];
        }

        if(password_verify($password,$pswd)){
            session_start();
            setcookie("session_id",session_id(),time()+60*60);
            $_SESSION['login']=$login;
            $_SESSION['function']=$function;
            $_SESSION['status']=$status;
            $_SESSION['class']=$class;
            $_SESSION['id']=session_id();
           header("location: ../podstrony/sets.php");
        } else {
            header("location: ../index.php");
        }
    } else {
        header("location: ../index.php");
    }




} else {
    header("location: ../index.php");
}




?>
