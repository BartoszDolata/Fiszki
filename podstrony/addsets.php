<?php
  require_once("../scripts/security.php");
  if(isset($_POST['btn_set'])&&!empty($_POST['set_name'])){
    require("../scripts/connect.php");
    $name=$_POST['set_name'];
    $set=$_POST['language'];
    $stmt = $connect->prepare("INSERT INTO `zestaw`(`nazwa_zestawu`, `jezyk_id`) VALUES (?,?)");
    $stmt->bind_param('si', $name,$set);
    if($stmt->execute()){
      header("location: ./addsets.php");
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

    <main class="flex-container">
        <form method="post" class="flex-container cntr">
            <div>Podaj nazwe zestawu</div>
            <input type="text" name="set_name" placeholder="Be creative!">
            <select name="language">
              <?php
              require("../scripts/connect.php");
              $sql = "SELECT `jezyk_id`, `jezyk_nazwa` FROM `jezyk`";
              $result=mysqli_query($connect,$sql);
              while($row=mysqli_fetch_assoc($result)){
                echo "<option value=".$row['jezyk_id'].">".$row['jezyk_nazwa']."</option>";
              }
               ?>
            </select>
            <br>
            <input type="submit" name="btn_set" value="Utwórz!">

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
