<?php
    require_once("connect.php");
    $sql = "SELECT * FROM `status`";
    $results = mysqli_query($connect,$sql);
    while($row = mysqli_fetch_assoc($results)){
       ?><option value="<?php echo $row['id_statusu']?>"><?php echo $row['nazwa_statusu']?></option>
       <?php
    }
?>