<?php
if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header('Location:login.php'); 
}

?>



<p><a href="index.php?dangxuat=1">dang xuat :  <?php if(isset($_SESSION['dangnhap'])){
   echo $_SESSION['dangnhap'];
 
    } ?></a></p>