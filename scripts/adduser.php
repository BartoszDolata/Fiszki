<?php
    if(isset($_POST['btn'])){
        $name=$_POST['name'];
        $lastname=$_POST['lastname'];
        $login=$_POST['login'];
        $pswd=$_POST['password'];
        $pswd1=$_POST['password1'];
        $function=$_POST['function'];
        $status=$_POST['status'];
        $class=$_POST['schoolclass'];
        if($pswd==$pswd1 &&
            !empty($_POST['name']) &&
            !empty($_POST['lastname']) &&
            !empty($_POST['password']) &&
            !empty($_POST['status']) &&
            !empty($_POST['function'])
            )
        {
            $en_paswd=password_hash($pswd,PASSWORD_ARGON2ID);
            require_once("connect.php");
            $sql = "SELECT * FROM `uzytkownik` WHERE `login`=\"$login\"";
            $result =  mysqli_query($connect,$sql);
                if(mysqli_num_rows($result)==0){
                  $stmt = $connect->prepare("INSERT INTO `uzytkownik` (`login`, `haslo`, `imie`, `nazwisko`, `funkcja_id`, `status_id`, `klasa_id`) VALUES (?,?,?,?,?,?,?)");
                  $stmt->bind_param('ssssiii',$login, $en_paswd, $name, $lastname,$function, $status, $class);
                    if($stmt->execute()){
                    header("location: ../podstrony/adduser.php");
                    }
                    else{
                        echo "databasse err";
                    };
             }else{
                header("location: ../podstrony/adduser.php");
            }
        }else{
            header("location: ../podstrony/adduser.php");
        }
    }


?>
