<?php
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css?<?=time()?>">
    <title>Fiszkopedia</title>
</head>

<body>
    <header class="index">
        <h1>Fiszkopedia</h1>
        <a href="#zaloguj">Zaloguj się!</a>
    </header>
    <main class="witaj">
        <h3>Witaj!</h3>
        <p>Moja witryna została stworzona do nauki języków obcych. Prezentuje sposoby poznawania słownictwa
            technicznego
            i profesjonalnego. Dzięki tej witrynie Ty, Twój nauczyciel jak i Administrator bedziecie mogli prawcować
            za jej pomocą</p>
        <section class="login">
            <a name="zaloguj"></a>
            <h2>Zaloguj się do serwisu</h2>
            <form method="post" action="scripts/login.php">
                <input class="login" type="text" name="login" placeholder="Login">
                <input class="login" type="password" name="password" placeholder="Password">
                <input type="submit" name="button" value="Zaloguj">
            </form>
        </section>
        
   

    </main>
    <footer>
    <?php
        require_once("./footer.php");
    ?>
    </footer>
</body>
</html>
    