
<?php
$sql_lietke_danhmucbv ="SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
$query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);

?>
<p> liet ke doanh muc bai viet</p>
<table width="100%" border="1px" style="border-collapse:collapse">
<tr>
    <th>id</th>
    <th>ten doanh muc</th>
    <th> quan ly</th>
</tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
    $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
        <td>
        <a href="modul/quanlydanhmucbaiviet/xyly.php?idbaiviet=<?php echo $row['id_baiviet']?>">xoa</a> | <a href="
        ?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet']?>">sua</a>
        </td>
    </tr>
<?php
}
?>

</table>