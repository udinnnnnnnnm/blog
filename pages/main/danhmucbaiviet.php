<?php
          $sql_bv ="SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id_danhmuc='$_GET[id]'
           ORDER BY id DESC";
          $query_bv =mysqli_query($mysqli,$sql_bv);
        

            $sql_cate ="SELECT * FROM tbl_danhmucbaiviet WHERE tbl_danhmucbaiviet.id_baiviet='$_GET[id]' LIMIT 1";
        
            $query_cate =mysqli_query($mysqli,$sql_cate);

            $row_tittle = mysqli_fetch_array($query_cate);
         
             ?>

<h3>doanh mục sản phẩm: <span style="text-align: center; text-transform: uppercase;"><?php echo $row_tittle['tendanhmuc_baiviet'] ?> </span></h3>
<div class="row">
                    <?php
                        while($row_bv = mysqli_fetch_array($query_bv)){
                    ?>



                    <div class="col-md-4">
                        
                        <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id']?>">

                        <img style="height: 300px; width:300px; margin-left:15%"" src="admincp/modul/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" >
                            <p class="tilte_product">tên bài viết :<?php echo $row_bv['tenbaiviet'] ?></p>
                            
                            
                        </a>
                        <p style="float: left; display: contents" class="tilte_product">tóm tắt: <?php echo $row_bv['tomtat'] ?></p>
                            
                        </div>
                    
                    <?php
                        }
                    ?>
                    
                    
                    </div>