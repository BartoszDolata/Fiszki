<?php
    require_once("connect.php");
    $sql = "SELECT * FROM `funkcja`";
    $results = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($results)){
       ?><option value="<?php echo $row['id_funkcji']?>"><?php echo $row['nazwa']?></option>
       <?php
    }
?>