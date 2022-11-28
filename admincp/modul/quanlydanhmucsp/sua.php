<?php
$sql_sua_danhmucsp ="SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);

?>

<p>sua doanh muc</p>   
<table border="1" width="50%" style="border-collapse:collapse;">

<form method="POST" action="modul/quanlydanhmucsp/xyly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">


    <?php 
    while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
    
    ?>


    <tr>
        <td>ten doanh muc</td>
        <td><input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
    </tr>
    <tr>
        <td>thutu</td>
        <td><input type="text" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
    </tr>
    <tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="sua danh muc san pham"> 
        </td>
        </tr>
    </tr>
    <?php 
    
}
    ?>

</form> 




</table>