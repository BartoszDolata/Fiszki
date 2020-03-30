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
        require_once("../scripts/connect.php");
        $sql = "SELECT * FROM `zestaw`";
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_assoc($result)){
        
            echo "<div class='set'>" . "<a href=\"./set.php?id=".$row['id_zestawu']."\"".">" . $row['nazwa_zestawu'] . "</a></div>";
        }
        ?>
        
    </main>

    <footer>
        <?php
        require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
</body>

</html>
