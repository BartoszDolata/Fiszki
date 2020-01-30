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
        <div class="fiszka">
            <div class="polish">informatyka</div>
            <div class="english">Information Technology (IT)</div>
        </div>
        <div class="fiszka">
            <div class=" polish">emulować</div>
            <div class="english">emulate</div>
        </div>
        <div class="fiszka">
            <div class=" polish">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ex ut eaque dolorum
                quo possimus quidem illum. A, sint voluptas?</div>
            <div class="english">Litwo! Ojczyzno moja! Ty jesteś jak zdrowie. Nazywał się młodzieniec oczy sąd, strony a
                w jakim stanie trudno zaradzić wolał z wieczerz wszyscy Soplicowie są, z drzew raz wraz skrzypi.</div>
        </div>
    </main>

    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
    <script src="../js/rotate.js"></script>
</body>

</html>