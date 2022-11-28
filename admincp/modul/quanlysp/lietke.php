
<?php
$sql_lietke_sp ="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc  ORDER BY id_sanpham DESC";
$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);

?>
<p> liet ke doanh muc san pham</p>
<table width="100%" border="1px" style="border-collapse:collapse">
<tr>
    <th>id</th>
    <th>ten san pham </th>
    <th>hinh anh    </th>
    <th>gia </th>
    <th>so luong </th>
    <th>danh muc</th>
    <th>ma san pham </th>
    <th>tom tat </th>
    <th>trang thai </th>
    <th> quan ly</th>
</tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>   
        <td><img src="modul/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt="error"></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php  if($row['tinhtrang']==1){
            
            echo 'kich hoat';
        }else{
            echo 'an';
        } ?>
        </td>
        <td>
        <a href="modul/quanlysp/xyly.php?idsanpham=<?php echo $row['id_sanpham']?>">xoa</a> | <a href="
        ?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">sua</a>
        </td>
    </tr>
<?php
}
?>

</table>