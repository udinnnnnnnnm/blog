<?php
$sql_lietke_bv = "SELECT * FROM tbl_baiviet,tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc=tbl_danhmucbaiviet.id_baiviet 
ORDER BY tbl_baiviet.id DESC";
$query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>
<p> liet ke danh muc bai viet</p>
<table width="100%" border="1px" style="border-collapse:collapse">
<tr>
    <th>id</th>
    <th>ten san pham </th>
    <th>hinh anh  </th>
    <th>danh muc</th>
   <th>tom tat </th>
    <th>trang thai </th>
    <th> quan ly</th>
</tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_bv)){
    $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tenbaiviet'] ?></td>   
        <td><img src="modul/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt="error"></td>
        
      
        <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
      
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php  if($row['tinhtrang']==1){
            
            echo 'kich hoat';
        }else{
            echo 'an';
        } ?>
        </td>
        <td>
        <a href="modul/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id']?>">xoa</a> | <a href="
        ?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id']?>">sua</a>
        </td>
    </tr>
<?php
}
?>

</table>