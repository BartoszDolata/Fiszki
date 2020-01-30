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

    <main class="flex-container cntr">
        <form method="post" class="flex-container cntr" action="../scripts/adduser.php">
            <div>Wpisz dane</div>
            <input type="text" name="name" placeholder="Imię">
            <input type="text" name="lastname" placeholder="Nazwisko">
            <div>Dane do logowania</div>
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Hasło">
            <input type="password" name="password1" placeholder="Powtórz hasło">
            <div>Fukcja użytkownika</div>
            <select class="opt" name="function">
            <?php
                include("../scripts/functions.php");
                ?>
            </select>
            <div>Status użytkownika</div>
            <select class="opt" name="status">
            <?php
                include("../scripts/statuses.php");
                ?>
            </select>
            <div>Klasa</div>
            
            <select name="schoolclass">
            <?php
                include("../scripts/classes.php");
                ?>
            </select>

            <input type="submit" name ="btn" value="Dodaj!">

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