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
        <p class="name akp">Użytkownik</p>
        <form class="flex-container cntr">
            <div class="desc">Klasa</div>
            <select class="opt" name="schooclass">
                <option value="1a">1A</option>
                <option value="1b">1B</option>
                <option value="2a">2A</option>
                <option value="2b">2B</option>
                <option value="3c">3C</option>
            </select>
            <div class="desc">Imię i nazwisko</div>
            <select class="opt" name="users">
                <option value="1">Antoni Wojda</option>
                <option value="2">Jan Kowalski</option>
                <option value="3">Janusz Nowak</option>
                <option value="4">Wojtek Smykała</option>
                <option value="5">Tadeusz Bronek</option>
            </select>
            <input type="text" placeholder="Nowe Nazwisko">
            <input type="text" placeholder="Nowe Imię">
            <div class="desc">status</div>
            <select class="opt" name="status">
                <option value="active">Aktywny</option>
                <option value="inactive">Nieaktywny</option>
                <option value="deleted">Usunięty</option>
            </select>
            <div class="desc">Logowanie</div>
            <select class="opt" name="users">
                <option value="1">antoni.wojda</option>
                <option value="2">jan.kowalski</option>
                <option value="3">janusz.nowak</option>
                <option value="4">wojtek.smykala</option>
                <option value="5">tadeusz.bronek</option>
                <option value="6">tadeusz.bronek1</option>
            </select>
            <input type="text" placeholder="Nowy Login">
            <input type="password" placeholder="Nowe hasło">



            <input type="submit" value="Aktualizuj!">

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