<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
  <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >Lịch sử đơn hàng</a><span> </div>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
  <h4>thong tin van chuyen</h4>
  <?php
  if(isset($_POST['themvanchuyen'])){
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $note= $_POST['note'];
    $id_dangky= $_SESSION['id_khachhang'];
    $sql_them_vanchuyen = mysqli_query($mysqli,"INSERT INTO tbl_shipping(name,phone,address,note,id_dangky) 
    VALUES('$name','$phone','$address','$note','$id_dangky')");
    if($sql_them_vanchuyen){
      echo'<script>alert("them  van chuyen thanh cong")</script>';
    }
      

    
  }elseif(isset($_POST['capnhatvanchuyen'])){
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $address= $_POST['address'];
    $note= $_POST['note'];
    $id_dangky= $_SESSION['id_khachhang'];
    $sql_update_vanchuyen = mysqli_query($mysqli,"UPDATE tbl_shipping SET name='$name',phone='$phone',address='$address'
    ,note='$note',id_dangky='$id_dangky' WHERE id_dangky='$id_dangky'");
    if($sql_update_vanchuyen){
      echo'<script>alert("cap nhap van chuyen thanh cong")</script>';

  }
}
  ?>
  <div class="row">
    <?php

      $id_dangky= $_SESSION['id_khachhang'];
      $sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
      $count = mysqli_num_rows($sql_get_vanchuyen);
      if($count>0){
        $row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
        $name = $row_get_vanchuyen['name'];
        $phone = $row_get_vanchuyen['phone'];
        $address = $row_get_vanchuyen['address'];
        $note = $row_get_vanchuyen['note'];
      }else{
        $name = '';
        $phone = '';
        $address = '';
        $note='';
      }
   
    ?>
    <div class="col-md-12">
  <form action="" autocomplete="off" method="POST">
  <div class="form-group">
    <label for="email">Họ và tên:</label>
    <input type="text" name="name" value="<?php echo $name ?>" class="form-control" placehoder="...">
  </div>
  <div class="form-group">
    <label for="email">Phone:</label>
    <input type="text" name="phone"   value="<?php echo $phone ?>" class="form-control" placehoder="...">
  </div>
  <div class="form-group">
    <label for="email">Địa chỉ:</label>
    <input type="text" name="address"  value="<?php echo $address ?>" class="form-control" placehoder="...">
  </div>
  <div class="form-group">
    <label for="email"> Ghi chú:</label>
    <input type="text" name="note"  value="<?php echo $note ?>" class="form-control" placehoder="...">
  </div>
  <?php 
    if($name=='' && $phone==''){
  
  ?>

  <button type="submit" name="themvanchuyen" class="btn btn-primary">cập nhập vận chuyển</button>
<?php
    }elseif($name!='' && $phone!='')
    {
      ?>
      <button type="submit" name="capnhatvanchuyen" class="btn btn-success">thêm vận chuyển</button>
      <?php 
      }
      ?>

</form>
 
</div>


<table style="width:100% ;text-align:center;border-collapse:collapse" border="1px">
  <tr>
    <th>id</th>
    <th>mã sp</th>
    <th>tên sản phẩm</th>
    <th>hình ảnh</th>
    <th>số lượng</th>
    <th>giá sản phẩm</th>
    <th>thành tiền</th>
  
  </tr>
  <?php 
  if(isset($_SESSION['cart'])){
    $i =0;
    $tongtien=0;
   
    foreach($_SESSION['cart'] as $cart_item){
        $thanhtien=$cart_item['soluong']*$cart_item['giasp'];
        $tongtien+=$thanhtien; 
        
  
        $i++;
        ?>
    
  
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admincp/modul/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px" alt=""></td>
    <td>
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">cộng</a>
      <?php echo $cart_item['soluong']; ?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">trừ</a>


    </td>
    
    
    
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnd'; ?></td>
    <td><?php echo $thanhtien; ?></td>
    
    


   
  </tr>
  



  <?php


    }
    ?>
        <tr>
    <td colspan="8"><p style="float:left;">tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnd';  ?></p>
        
        <div style="clear: both;"></div> 
    <?php
    if(isset($_SESSION['dangky'])){
      ?>
    <p><a href="index.php?quanly=thongtinthanhtoan">Thanh toán</a></p>
    <?php
    }else{
      ?>
      <p><a href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
      <?php
    }
    ?>


    </td>
    
    </tr>
    

    <?php
    }else{
    ?>
    



  <tr>
    <td colspan="8"><p>hiện tại giỏ hàng đang trống </p></td>
    
  </tr>
  <?php
}
?>
</table>

</div>
</div>