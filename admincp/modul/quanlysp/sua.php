<?php

$sql_sua_sp ="SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";

$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);

?>

<p>sau sản phăm</p> 
<table border="1" width="100%" style="border-collapse: collapse;">
<?php

    while($row = mysqli_fetch_array($query_sua_sp)){

?>
 <form method="POST" action="modul/quanlysp/xyly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
<tr>
<td>Tên sản phẩm</td>

<td><input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham"></td> 
</tr> 
<tr>
<td>Mã sp</td>

<td><input type="text" value="<?php echo $row['masp'] ?>" name="masp"></td>
 </tr> 
 <tr>
<td>Giả sp</td>
<td><input type="text" value="<?php echo $row['giasp'] ?>" name="giasp"></td>
 </tr> 
 <tr>
<td>Số lượng</td>
<td><input type="text" value="<?php echo $row['soluong'] ?>" name="soluong"></td>
 </tr> 
 <tr> 
    <td>Hình ảnh</td>
<td>
    <input type="file" name="hinhanh">
    <img src="modul/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt="error">



</td>
 </tr> 
 <tr>
<td>Tóm tắt</td>
<td><textarea rows="10"   name="tomtat" style="resize: none"> <?php echo $row['tomtat'] ?></textarea></td>
 </tr>
  <tr> 
    <td>Nội dung</td> 
    <td><textarea  rows="10" name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea></td>
  </tr>


  <tr>
      <td>doanh muc san pham</td>
      <td>
        <select name="danhmuc">
           <?php

            $sql_danhmuc ="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc =mysqli_query($mysqli,$sql_danhmuc);

            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
            if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
             ?>
            <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?> </option>
           
            <?php
            }else{
              ?>
            <option  value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?> </option>

              <?php

             }
            }
           ?>
       </select>

    </td>

  </tr>





  <tr>
    <td>tinh trang</td>
    <td>
        <select name="tinhtrang" >
            <?php
                if($row['tinhtrang']==1){
            ?>

            <option value="1" selected>kick hoat</option>
            <option value="0">an</option>
                    <?php
                }else{

                ?>
                
            <option value="1" >kick hoat</option>
            <option value="0" selected>an</option>
            <?php
                }
                ?>


        </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="suasanpham" value="sua san pham "></td>
  </tr>
 </form>
 <?php
}
?>
</table>
