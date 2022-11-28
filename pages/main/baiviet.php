<?php
          $sql_bv ="SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
           
          $query_bv =mysqli_query($mysqli,$sql_bv);
          $query_bv_all =mysqli_query($mysqli,$sql_bv);
        

           

            $row_bv_tittle = mysqli_fetch_array($query_bv);
         
             ?>
             <div class="row product_list">

<h3>bài viết: <span style="text-align: center; text-transform: uppercase;"><?php echo $row_bv_tittle['tenbaiviet'] ?> </span></h3>

                    <?php
                        while($row_bv = mysqli_fetch_array($query_bv_all)){
                    ?>



                    <div class="col-lg-10">
                        <h4><?php echo $row_bv['tenbaiviet'] ?></h4>
                       

                        <img style="height: 300px; width:300px; margin-left:35%"  src="admincp/modul/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" >
                            <p class="tilte_product">tên bài viết <?php echo $row_bv['tomtat'] ?></p>
                            
                            
                        
                        <p style="margin: 10px;" class="tilte_product"><?php echo $row_bv['noidung'] ?></p>
                            
                        </div>

                    <?php
                        }
                    ?>
                    
                    
             </div>