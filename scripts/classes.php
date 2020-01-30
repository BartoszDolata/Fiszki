<?php
    require_once("connect.php");
    $sql = "SELECT * FROM `klasa`";
    $results = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($results)){
       ?><option value="<?php echo $row['id_klasy']?>"><?php echo $row['symbol_klasy']?></option>
       <?php
    }
?>