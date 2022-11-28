<?php
$sql_sua_danhmucbv ="SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);

?>




<p>sua doanh muc bai viet</p>   
<table border="1" width="50%" style="border-collapse:collapse;">

    



<form method="POST" action="modul/quanlydanhmucbaiviet/xyly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
<?php 
    while($dong = mysqli_fetch_array($query_sua_danhmucbv)){
    
    ?>

    <tr>
        <td>ten doanh muc bai viet</td>
        <td><input type="text" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet"></td>
    </tr>
    <tr>
        <td>thutu</td>
        <td><input type="text"  value="<?php echo  $dong['thutu']  ?>" name="thutu"></td>
    </tr>
    <tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadanhmucbaiviet" value="cap nhap doanh muc bai viet "> 
        </td>
        </tr>
    </tr>
    <?php
    }
    ?>

</form> 
 



</table>