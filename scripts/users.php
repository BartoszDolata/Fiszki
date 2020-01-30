
<?php
    require_once("connect.php");
    $sql = "SELECT * FROM `uzytkownik`";
    $results = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($results)){
       ?><option value="<?php echo $row['login']?>"><?php echo $row['login']," ", $row['imie']," ", $row['nazwisko'];?></option>
       <?php
    }
?>