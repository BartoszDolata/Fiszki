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
        <div class="set cntr"><a href="fiszki.php" class="link_reset"><i class="fas fa-sticky-note"></i>Ucz się!</a>
        </div>
        <section class="edit_set">
            <div class="flex-row">
                <p>informatyka</p>
                <p>Information Technology</p><a href="" class="link_reset trash"><i class="fas fa-trash"></i></a>
            </div>
            <div class="flex-row">
                <p>emulate</p>
                <p>emulować</p><a href="" class="link_reset trash"><i class="fas fa-trash"></i></a>
            </div>
            <div class="flex-row">
                <p>Lorem ipsum dolor sit amet consectetur adipisi</p>
                <p>tłumaczenie tego to próba na bardzo długim ciągu, który raczej nie wystąpi</p><a href=""
                    class="link_reset trash"><i class="fas fa-trash"></i></a>
            </div>
            <div class="flex-row">
                <p>card</p>
                <p>karta</p>
                <a href="" class="link_reset trash"><i class="fas fa-trash"></i></a>
            </div>
            <div class="flex-row">
                <p>disc</p>
                <p>dysk</p>
                <a href="" class="link_reset trash"><i class="fas fa-trash"></i></a>
            </div>
            <div class="flex-row">
                <p>data</p>
                <p>dane</p>
                <a href="" class="link_reset trash"><i class="fas fa-trash"></i></a>
            </div>
            <div class="flex-row">
                <p>fiszka</p>
                <p>tłumaczenie</p>
                <a href="" class="link_reset trash"><i class="fas fa-trash"></i></a>
            </div>
        </section>
    </main>

    <footer>
        <?php 
            require_once("../footer.php");
        ?>
    </footer>

    <script src="../js/burger.js"></script>
</body>

</html>