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
        <div class="set"><a href="./set.php">Zestaw 1</a></div>
        <div class="set"><a href="./set.php">Zestaw 2</a></div>
        <div class="set"><a href="./set.php">Zestaw 3</a></div>
        <div class="set"><a href="./set.php">Zestaw 4</a></div>
        <div class="set"><a href="./set.php">Zestaw 5</a></div>
        <div class="set"><a href="./set.php">Zestaw 6</a></div>
        <div class="set"><a href="./set.php">Zestaw 7</a></div>
    </main>

    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
</body>

</html>