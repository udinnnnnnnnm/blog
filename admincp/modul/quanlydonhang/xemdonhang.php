<p>xem don hang</p>
<?php
$code =  $_GET['code'];
$sql_lietke_dh ="SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham 
AND tbl_cart_details.code_cart='".$code."'  ORDER BY tbl_cart_details.id_cart_details DESC";
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

?>

<table width="100%" border="1px" style="border-collapse:collapse">
<tr>
    <th>id</th>
    <th>ma don hang</th>
    <th>ten san pham</th>
    <th>so luong</th>
    <th>don gia</th>
    <th>thanh tien</th>
    
</tr>
<?php
    $i=0;
    $tongtien = 0;

    while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    $thanhtien=$row['giasp']*$row['soluongmua'];
    $tongtien += $thanhtien;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><?php echo $row['soluongmua'] ?></td>
        <td><?php echo number_format($row['giasp'],0,',','.').'vnd' ?></td>
        <td><?php echo number_format($row['giasp']*$row['soluongmua'],0,',','.').'vnd' ?></td>

        <td>
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">xem don hang</a> 
        </td>
    </tr>
<?php
}
?>
<tr>



    <td colspan="6">

    <p>tong tien : <?php echo number_format($tongtien,0,',','.').'vnd' ?></p>
        
    
    </td>
</tr>
</table>