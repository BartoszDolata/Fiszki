<?php
  require_once("../scripts/security.php");
  if(isset($_POST['del'])){
    require("../scripts/connect.php");
    $id_class=$_POST['schooclass'];
    $stmt = $connect->prepare("DELETE FROM `klasa` WHERE `id_klasy`=?");
    $stmt->bind_param('i', $id_class);
  header("location: ./deleteclass.php");
    if($stmt->execute()){
      header("location: ./deleteclass.php");
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
            <select class="opt" name="schooclass">
            <?php
                include("../scripts/classes.php");
                ?>
            </select>
            <input type="submit" name="del" value="Usuń!">
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