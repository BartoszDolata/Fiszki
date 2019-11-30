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
                <option value="1a">1A</option>
                <option value="1b">1B</option>
                <option value="2a">2A</option>
                <option value="2b">2B</option>
                <option value="3c">3C</option>
            </select>
            <input type="submit" value="Usuń!">
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