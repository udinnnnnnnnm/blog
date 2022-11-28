<?php
        if(isset($_POST['timkiem'])){

            $tukhoa = $_POST['tukhoa'];
        }
        $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc 
        AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
        $query_pro = mysqli_query($mysqli,$sql_pro);

?>

<h3>Từ khóa cần tìm kiếm: <?php  echo $tukhoa; ?></h3>

<ul class="product_list">

                    <?php
                        while($row = mysqli_fetch_array($query_pro)){
                    ?>
                    

   
                                <li>
                
                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>">

                        <img class="img img-responsive"  src="admincp/modul/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" >
                            <p class="tilte_product"> <?php echo $row['tensanpham'] ?></p>
                            
                            <p class="prise_product">giá trị:
                                 <?php echo number_format($row['giasp'],0,',',',').'vnd' ?></p>
                                 <p style="text-align: center; color:#d1d1d1; max: width 200px;px"><?php echo $row['tensanpham'] ?></p>
                        </a>
                        </li>

                    <?php
                        }
                    ?>
                    
                    
                    </ul>