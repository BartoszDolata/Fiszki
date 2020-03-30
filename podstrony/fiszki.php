<?php
  require_once("../scripts/security.php");
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

    <main class="flex-container cntr">
        <?php
        if(isset($_GET['zestaw'])){
            require_once("../scripts/connect.php");
            $id_zestawu = $_GET['zestaw'];
            $sql = "SELECT * FROM `fiszki` WHERE `zestaw_id`=$id_zestawu";
            $result=mysqli_query($connect,$sql);
            if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
            echo <<<FISZKA
                <div class="fiszka">
                    <div class="polish">$row[tekst_fiszki]</div>
                    <div class="english">$row[tlumaczenie]</div>
                </div>
            FISZKA;
            }
            }else{
             echo "<h1>Ups!</h1><p class='nocards'> Nie masz jeszcze dodatnych żadnych fiszek. Aby powiekszyć swoją bazę kliknij <a href='./addcards.php'>TUTAJ</a></p>";
            }
        }
        ?>
    </main>

    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
    <script src="../js/rotate.js"></script>
</body>

</html>