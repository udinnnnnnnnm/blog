<h3 style="text-align: center; text-transform: uppercase;">tin tức</h3>
<?php
          $sql_bv ="SELECT * FROM tbl_baiviet WHERE tinhtrang=1
           ORDER BY id DESC";
          $query_bv =mysqli_query($mysqli,$sql_bv);
        

            
             ?>


<div class="row product_list">
                    <?php
                        while($row_bv = mysqli_fetch_array($query_bv)){
                    ?>



                    <div class="col-md-4">
                        <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id']?>">

                        <img style="margin-left: 2%; height:300px; width:300px;" class="img img-responsive" src="admincp/modul/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" >
                            <p class="tilte_product">Tên bài viết <?php echo $row_bv['tenbaiviet'] ?></p>
                            
                            
                        </a>
                        <p class="tilte_product">Tóm tắt<?php echo $row_bv['tomtat'] ?></p>
                            
                        </div>

                    <?php
                        }
                    ?>
                    
                    
                    </div>