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

        <p class="akp">Usuwanie użytkowników</p>
        <select class="cntr opt" name="users">
            <option value="1">antoni.wojda</option>
            <option value="2">jan.kowalski</option>
            <option value="3">janusz.nowak</option>
            <option value="4">wojtek.smykala</option>
            <option value="5">tadeusz.bronek</option>
            <option value="6">tadeusz.bronek1</option>
        </select>
        <input type="submit" value="Usuń użytkownika">
    </main>

    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
</body>

</html>