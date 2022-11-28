<p>liet ke don hang</p>
<?php
$sql_lietke_dh ="SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);

?>
<p> liet ke doanh muc san pham</p>
<table width="100%" border="1px" style="border-collapse:collapse">
<tr>
    <th>id</th>
    <th>ma don hang</th>
    <th>ten khach hang</th>
    <th>dia chi</th>
    <th>email</th>
    <th>so dien thoai</th>
    <th> tinh trang</th>
    <th> ngay dat</th>
    <th> quan ly</th>
    <th></th>
</tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['code_cart'] ?></td>
        <td><?php echo $row['tenkhachhang'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['dienthoai'] ?></td>
        <td>
            <?php if($row['cart_status']==1){
                echo '<a href="modul/quanlydonhang/xuly.php?code='.$row['code_cart'].'"> do hang moi</a>';
            }else
            {
                echo ' da xem';
            }
            ?>

        </td>
        <td><?php echo $row['cart_date'] ?></td>

        <td>
        <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">xem don hang</a> 
        </td>
        
        <td>
        <a href="modul/quanlydonhang/indonhang.php?code=<?php echo $row['code_cart']?>">in don hang</a> 
        </td>
    </tr>
<?php
}
?>

</table>