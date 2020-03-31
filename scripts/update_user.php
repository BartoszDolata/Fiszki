<?php
if(isset($_POST['btn_update1'])){
    if(!empty($_POST['n_name']) &&
    !empty($_POST['n_surname'])){
        $login=$_POST['login'];
        $name=$_POST['n_name'];
        $surname=$_POST['n_surname'];
        require_once("connect.php");
    }$stmt = $connect->prepare("UPDATE `uzytkownik` SET `imie`=?,`nazwisko`=? WHERE `login`='$login'");
    $stmt->bind_param('ss',$name, $surname);
    if($stmt->execute()){
    header("location: ../podstrony/users.php");
    }
    else{
        echo "databasse err";
        echo "<script>alert('cos nie tak')</script>";
    }
    
}
if(isset($_POST['btn_update2'])){
    if(!empty($_POST['schoolclass'])){
        $login=$_POST['login'];
        $class=$_POST['schoolclass'];
        require_once("connect.php");
    $stmt = $connect->prepare("UPDATE `uzytkownik` SET `klasa_id`=? WHERE `login`='$login'");
    $stmt->bind_param('i',$class);
    if($stmt->execute()){
    header("location: ../podstrony/users.php");
    }
    else{
        echo "databasse err";
        echo "<script>alert('cos nie tak')</script>";
    }
}
}
if(isset($_POST['btn_update3'])){
    if(!empty($_POST['status'])){
        $login=$_POST['login'];
        $status=$_POST['status'];
        require_once("connect.php");
    $stmt = $connect->prepare("UPDATE `uzytkownik` SET `status_id`=? WHERE `login`='$login'");
    $stmt->bind_param('i',$status);
    if($stmt->execute()){
    header("location: ../podstrony/users.php");
    }
    else{
        echo "databasse err";
        echo "<script>alert('cos nie tak')</script>";
    }
}
}
if(isset($_POST['btn_update3'])){
    if(!empty($_POST['status'])){
        $login=$_POST['login'];
        $status=$_POST['status'];
        require_once("connect.php");
    $stmt = $connect->prepare("UPDATE `uzytkownik` SET `status_id`=? WHERE `login`='$login'");
    $stmt->bind_param('i',$status);
    if($stmt->execute()){
    header("location: ../podstrony/users.php");
    }
    else{
        echo "databasse err";
        echo "<script>alert('cos nie tak')</script>";
    }
}
}
if(isset($_POST['btn_update4'])){
    if(!empty($_POST['function'])){
        $login=$_POST['login'];
        $function=$_POST['function'];
        require_once("connect.php");
    $stmt = $connect->prepare("UPDATE `uzytkownik` SET `funkcja_id`=? WHERE `login`='$login'");
    $stmt->bind_param('i',$function);
    if($stmt->execute()){
    header("location: ../podstrony/users.php");
    }
    else{
        echo "databasse err";
        echo "<script>alert('cos nie tak')</script>";
    }
}
}
if(isset($_POST['btn_update5'])){
    $pswd=$_POST['n_pas'];
    $pswd1=$_POST['n_pas1'];
    if($pswd==$pswd1 &&
        !empty($_POST['n_pas']) &&
        !empty($_POST['n_pas1']) &&
        !empty($_POST['n_log'])
        ){
        $en_paswd=password_hash($pswd,PASSWORD_ARGON2ID);
        $login=$_POST['login'];
        $nlogin=$_POST['n_log'];
        require_once("connect.php");
        $stmt = $connect->prepare("UPDATE `uzytkownik` SET `login`=?,`haslo`=? WHERE `login`='$login'");
       $stmt->bind_param('ss',$nlogin, $en_paswd);
    if($stmt->execute()){
    header("location: ../podstrony/users.php");
    }
    else{
        echo "databasse err";
        echo "<script>alert('cos nie tak')</script>";
    }
}
}
?>