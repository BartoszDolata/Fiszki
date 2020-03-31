<?php
  require_once("../scripts/security.php");
  if(isset($_POST["btn_class"]) && !empty($_POST["classname"])){
    require("../scripts/connect.php");
    $class_name=$_POST["classname"];
    $regexp="/^[0-9]{1}[A-Z]{1,2}$/";
    if(preg_match($regexp,$class_name)){
        $sql = "SELECT * FROM `klasa` WHERE `symbol_klasy`=\"$class_name\"";
            $result =  mysqli_query($connect,$sql);
                if(mysqli_num_rows($result)==0){
                    $stmt = $connect->prepare("INSERT INTO `klasa`(`symbol_klasy`) VALUES (?)");
                    $stmt->bind_param('s',$class_name);
                    if($stmt->execute()){
                        header("location: ../podstrony/addclass.php");
                            }
                            else{
                                echo "databasse err";
                            };
                        }else{
                            echo "<script>alert('Ta klasa juz istnieje')</script>";
                        }
    }else{
        echo "<script>alert('Nieprawidłowy format. Wpisz numer klasy i literę alfabetu')</script>";
    }
    

  }
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiszkopedia</title>
    <script src="https://kit.fontawesome.com/dd9ff233e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body class="main">
    <header class="head">
    <?php 
        require_once("./header.php");
        ?>
    </header>
    

    <aside>
        <?php 
        require_once("./nav.php");
        ?>
    </aside>
    
    <main class="flex-container">
        <form method="post" class="flex-container cntr">
            <div>Wpisz symbol klasy</div>
            <input type="text" name="classname" placeholder="[Nr_klasy][Litera]" id="sqlclass">
            <input type="submit" value="Dodaj!" id="button" name="btn_class">
        </form>
    </main>
    
    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
</body>

</html>