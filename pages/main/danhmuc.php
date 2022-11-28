<?php
          $sql_pro ="SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]'
           ORDER BY id_sanpham DESC";
          $query_pro =mysqli_query($mysqli,$sql_pro);
        

            $sql_cate ="SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
        
            $query_cate =mysqli_query($mysqli,$sql_cate);

            $row_tittle = mysqli_fetch_array($query_cate);
         
             ?>
 
<h3>doanh mục sản phẩm: <?php echo $row_tittle['tendanhmuc'] ?></h3>
<ul class="product_list">

                    <?php
                        while($row_pro = mysqli_fetch_array($query_pro)){
                    ?>

   

                   
                        <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">

                        <img " class="img img-responsive"  src="admincp/modul/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" >
                            <p class="tilte_product"> <?php echo $row_pro['tensanpham'] ?></p>
                            
                           
                            <p class="prise_product">giá trị: 
                                <?php echo number_format($row_pro['giasp'],0,',',',').'vnd' ?></p>
                                <p style="text-align: center; color:#d1d1d1"><?php echo $row_pro['tensanpham'] ?></p>
                        </a>
                        </li>
             

                    <?php
                        }
                    ?>
                    
                    
                    </ul>
                    <div>