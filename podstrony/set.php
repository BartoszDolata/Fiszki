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

    <main class="flex-container">
    <?php
        echo<<<AA
        <div class="set cntr"><a href="fiszki.php?zestaw=$_GET[id]" class="link_reset">Ucz się!</a>
        </div>
        AA;
    ?>
        <
        <section class="edit_set">
            <?php
             if(isset($_GET['id'])){
                require_once("../scripts/connect.php");
                $id_zestawu = $_GET['id'];
                $sql = "SELECT * FROM `fiszki` WHERE `zestaw_id`=$id_zestawu";
                $result=mysqli_query($connect,$sql);
                if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result)){
                    echo <<<FISZKA
                    <div class="flex-row">
                    <p>$row[tekst_fiszki]</p>
                    <p>$row[tlumaczenie]</p><a href="../scripts/del_card.php?del_id=$row[id_fiszki]&set=$row[zestaw_id]" class="link_reset trash"><i class="fas fa-trash"></i></a>
                </div>
                FISZKA;
                }
            }
            else{
                echo "<h1>Ups!</h1><p class='nocards'> Nie masz jeszcze dodatnych żadnych fiszek. Aby powiekszyć swoją bazę kliknij <a href='./addcards.php'>TUTAJ</a></p>";
            }
            }
            ?>
        </section>
    </main>

    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
</body>

</html>