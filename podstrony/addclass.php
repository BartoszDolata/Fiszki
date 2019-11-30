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
            <input type="submit" value="Dodaj!" id="button">
        </form>
    </main>
    
    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
    <script src="../js/valid.js"></script>
</body>

</html>