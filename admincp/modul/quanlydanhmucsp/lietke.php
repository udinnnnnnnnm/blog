
<?php
$sql_lietke_danhmucsp ="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);

?>
<p> liet ke doanh muc san pham</p>
<table width="100%" border="1px" style="border-collapse:collapse">
<tr>
    <th>id</th>
    <th>ten doanh muc</th>
    <th> quan ly</th>
</tr>
<?php
    $i=0;
    while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
    $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
        <a href="modul/quanlydanhmucsp/xyly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">xoa</a> | <a href="
        ?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">sua</a>
        </td>
    </tr>
<?php
}
?>

</table>