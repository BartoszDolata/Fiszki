<?php
echo "dupa";
if(isset($_POST['btn_update'])){
    echo "<script>alert('cos nie tak')</script>";
    $pswd=$_POST['n_pas'];
    $pswd1=$_POST['n_pas1'];
    if($pswd==$pswd1 &&
        !empty($_POST['n_name']) &&
        !empty($_POST['n_surname']) &&
        !empty($_POST['n_pas']) &&
        !empty($_POST['n_pas1']) &&
        !empty($_POST['n_log'])
        )
    {
        $login=$_POST['login'];
        $nlogin=$_POST['n_log'];
        $name=$_POST['n_name'];
        $surname=$_POST['n_surname'];
        $pswd=$_POST['n_pas'];
        $pswd1=$_POST['n_pas1'];
        $function=$_POST['function'];
        $status=$_POST['status'];
        $class=$_POST['schoolclass'];
        $en_paswd=password_hash($pswd,PASSWORD_ARGON2ID);
        require_once("connect.php");
        $stmt = $connect->prepare("UPDATE `uzytkownik` SET `login`=?,`haslo`=?,`imie`=?,`nazwisko`=?,`funkcja_id`=?,`status_id`=?,`klasa_id`=? WHERE `login`='$login'");
        $stmt->bind_param('ssssiii',$nlogin, $en_paswd, $name, $surname,$function, $status, $class);
        if($stmt->execute()){
        header("location: ../podstrony/users.php");
        }
        else{
            echo "databasse err";
            echo "<script>alert('cos nie tak')</script>";
        }
             
    }else{
        header("location: ../podstrony/users.php");
        echo "<script>alert('cos nie tak')</script>";
    }
}

?>