<?php
    require_once("../scripts/security.php");

    //dodawanie
    if(isset($_POST['btnadd'])){
        require("../scripts/connect.php");
        $counter=1;
        while(isset($_POST["pol$counter"])&&isset($_POST["eng$counter"])){
            if(!empty($_POST["pol$counter"]) && !empty($_POST["eng$counter"])){
                $pol=$_POST["pol$counter"];
                $eng=$_POST["eng$counter"];
                $zestaw=$_POST["sets"];
                $stmt = $connect->prepare("INSERT INTO `fiszki`( `tekst_fiszki`, `tlumaczenie`, `zestaw_id`) VALUES (?,?,?)");
                  $stmt->bind_param('ssi',$pol,$eng,$zestaw);
                    if($stmt->execute()){
                    header("location: ../podstrony/addcards.php");
                    }
                    else{
                        echo "databasse err";
                    };
            }
            $counter++;
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
            <div>Wybierz nazwę zestawu</div>
            <select name="sets" class="cntr opt">
              <?php
              require("../scripts/connect.php");
              $sql = "SELECT * FROM `zestaw`";
              $result=mysqli_query($connect,$sql);
              while($row=mysqli_fetch_assoc($result)){
                echo "<option value=".$row['id_zestawu'].">".$row['nazwa_zestawu']."</option>";
              }
               ?>
            </select>
            <div id="form" class="add">
                <input type="text" name="pol1" placeholder="1 po polsku...">
                <input type="text" name="eng1" placeholder="1 po angielsku...">
            </div>
            <div class="plus"><i class="fas fa-plus"></i></div>
            <input type="submit" name="btnadd" value="Dodaj!">

        </form>

    </main>

    <footer>
        <?php
        require_once("../footer.php");
    ?>
    </footer>

    <script src="../js/burger.js"></script>
    <script src="../js/cards.js"></script>
</body>


</html>
