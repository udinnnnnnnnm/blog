


<?php
$sql_lh ="SELECT * FROM tbl_lienhe WHERE id=1 ";
$query_lh = mysqli_query($mysqli,$sql_lh);
?>

 

<?php 
    while($dong = mysqli_fetch_array($query_lh)){
    
    ?>
 
 
        <p style="text-align: left;"><?php echo $dong['thongtinlienhe'] ?></p>
 
  <?php 
    }
    ?>


