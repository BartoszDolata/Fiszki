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
        <form class="flex-container cntr" method=post action="../scripts/update_user.php">
            
        <div class="desc" style="color:#2E2E40;">Aktualizacja danych</div>
            <select class="opt" name="login">
                <?php require_once("../scripts/users.php");?>
            </select>
            <div class="desc">Imię i nazwisko</div>
            <input type="text" name="n_surname" placeholder="Nowe Nazwisko">
            <input type="text" name="n_name" placeholder="Nowe Imię">
            <input type="submit" name="btn_update1" value="Aktualizuj!">
            <div class="desc">Klasa</div>
            <select class="opt" name="schoolclass">
            <?php require_once("../scripts/classes.php");?>
            <input type="submit" name="btn_update2" value="Aktualizuj!">
            <hr>
            </select>
            <div class="desc">status</div>
            <select class="opt" name="status">
            <?php require_once("../scripts/statuses.php");?>
            </select>
            <input type="submit" name="btn_update3" value="Aktualizuj!">
            <div class="desc">Funkcja</div>
            <select class="opt" name="function">
            <?php require_once("../scripts/functions.php");?>
            <input type="submit" name="btn_update4" value="Aktualizuj!">
            </select>
            <div class="desc">Logowanie</div>
            <input type="text" name="n_log" placeholder="Nowy Login">
            <input type="password" name="n_pas" placeholder="Nowe hasło">
            <input type="password" name="n_pas1" placeholder="Powtórz hasło">
            <input type="submit" name="btn_update5" value="Aktualizuj!">

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