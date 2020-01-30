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
        <form method="post" class="flex-container cntr">
            <div>Wybierz nazwę zestawu</div>
            <select name="sets" class="cntr opt">
                <option value="">Rozwiń listę</option>
                <option value="set1">Zestaw 1</option>
                <option value="set2">Zestaw 2</option>
                <option value="set3">Zestaw 3</option>
            </select>
            <div id="form" class="add">
                <input type="text" name="pol" placeholder="1 po polsku...">
                <input type="text" name="eng" placeholder="1 po angielsku...">
            </div>
            <div class="plus"><i class="fas fa-plus"></i></div>
            <input type="submit" value="Dodaj!">

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