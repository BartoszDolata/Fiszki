<nav>
    <ul>
        <li><a href="./sets.php">Zestawy</a></li>
        <li><a href="./addsets.php">Dodaj zestaw</a></li>
        <li><a href="./deletesets.php">Usuń zestaw</a></li>
        <li><a href="./addcards.php">Dodaj fiszki</a></li>
        <?php
        if($_SESSION['function']==1 || $_SESSION['function']==2){?>
          <li><a href="./addclass.php">Dodaj klasę</a></li>
          <li><a href="./deleteclass.php">Usuń klasę</a></li>

          <?php
        }?>
        <?php if($_SESSION['function']==1){?>
          <li><a href="./adduser.php">Dodaj użytkownika</a></li>
          <li><a href="./deleteusers.php">Usuń użytkowników</a></li>
          <li><a href="./users.php">Edytuj dane użytkowników</a></li>
          <?php
        }?>

    </ul>
</nav>
