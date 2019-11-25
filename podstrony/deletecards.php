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
            <select name="cards" class="cntr opt">
                <option value="">Rozwiń listę</option>
                <option value="card1">emulować - emulate</option>
                <option value="card2">informatyka - Information Technology(IT)</option>
                <option value="card3">Lorem ipsum dolor sit, amet consectetur</option>
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

</html>