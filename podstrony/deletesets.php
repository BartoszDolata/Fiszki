<?php
  require_once("../scripts/security.php");
  if(isset($_POST['btn'])){
    require("../scripts/connect.php");
    $id=$_POST['sets'];
    $stmt = $connect->prepare("DELETE FROM `zestaw` WHERE `id_zestawu`=?");
    $stmt->bind_param('i', $id);
  header("location: ./deletesets.php");
    if($stmt->execute()){
      header("location: ./deletesets.php");
    }
  }
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

        <form method="post" class="flex-container cntr">
          <p class="akp">Usuwanie zestawu</p>
          <select name="sets" class="cntr opt">
            <?php
            require("../scripts/connect.php");
            $sql = "SELECT * FROM `zestaw`";
            $result=mysqli_query($connect,$sql);
            while($row=mysqli_fetch_assoc($result)){
              echo "<option value=".$row['id_zestawu'].">".$row['nazwa_zestawu']."</option>";
            }
             ?>
          </select>
          <input type="submit" name="btn" value="Usuń zestaw">
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
