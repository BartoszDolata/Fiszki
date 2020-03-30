<?php
if(isset($_GET['del_id'])){
    $id=$_GET['del_id'];
    $id_zestawu=$_GET['set'];
    require_once("./connect.php");
    $sql = "DELETE FROM `fiszki` WHERE `id_fiszki`=$id";
    if(mysqli_query($connect,$sql)){
        header("location: ../podstrony/set.php?id=$id_zestawu");
    }else{
        echo "ERROR 3231";
    }
}
?>