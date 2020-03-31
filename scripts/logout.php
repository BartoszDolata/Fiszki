<?php
session_start();
setcookie("function","",time());
session_unset();
session_destroy();
    header('location: ../index.php');
?>