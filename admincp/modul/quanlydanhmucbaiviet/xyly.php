<?php
include("../../config/config.php");

$tendanhmucbaiviet = $_POST['tendanhmucbaiviet'];
$thutu = $_POST['thutu'];
// them
if(isset($_POST['tendanhmucbaiviet'])){
    $sql_them ="INSERT INTO tbl_danhmucbaiviet(tendanhmuc_baiviet,thutu) VALUE('".$tendanhmucbaiviet."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('location:../../index.php?action=quanlydanhmucbaiviet&query=them');
}
elseif(isset($_POST['suadanhmucbaiviet'])){
    
   

        $sql_update ="UPDATE  tbl_danhmucbaiviet SET tendanhmuc_baiviet='".$tendanhmucbaiviet."',thutu='".$thutu."' 
        WHERE id_baiviet='$_GET[idbaiviet]'";
        
        mysqli_query($mysqli,$sql_update);
        header('location:../../index.php?action=quanlydanhmucbaiviet&query=them');
    
    //  sua   
}else{
    $id=$_GET['idbaiviet'];
    $sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_baiviet='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../index.php?action=quanlydanhmucbaiviet&query=them');

}
?>