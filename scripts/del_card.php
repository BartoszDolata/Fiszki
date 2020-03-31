<?php
if($_COOKIE['function']==1||$_COOKIE['function']==2){
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
}else{
    $id_zestawu=$_GET['set'];
    echo "<script>alert('Nie posiadasz praw do usuwania');location.href=\"../podstrony/set.php?id=".$id_zestawu."\"</script>";
}

?>