<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
  <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
    <div class="step "> <span><a href="index.php?quanly=donhangdadat" >lịch sử đơn hàng</a><span> </div>
  </div>
  <!-- end Responsive Arrow Progress Bar -->
  <form action="pages/main/xulythanhtoan.php" method="POST">
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
      <div class="col-md-8">
 
          <h4>thông tin vận chuyển và giỏ hàng</h4>
          <ul>
            <li>họ và tên : <b><?php echo $name ?></b></li>
            <li>số điện thoại: <b><?php echo $phone ?></b></li>
            <li>địa chỉ: <b><?php echo $address ?></b></li>
            <li>ghi chú : <b><?php echo $note ?></b></li>
          </ul>
          <h5>giỏ hàng của bạn </h5>
          <table style="width:100% ;text-align:center;border-collapse:collapse" border="1px">
  <tr>
    <th>id</th>
    <th>mã sản phẩm</th>
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
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">trừ*-</a>


    </td>
    
    
    
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnd'; ?></td>
    <td><?php echo $thanhtien; ?></td>
  
    


   
  </tr>
  



  <?php


    }
    ?>
        <tr>
    <td colspan="8"><p style="float:left;">tổng tiền<?php echo number_format($tongtien,0,',','.').'vnd';  ?></p>
        
        <div style="clear: both;"></div> 
    


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
      <div class="col-md-4">
        <h4>phương thức thanh toán</h4>
                <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="tiem mat" checked >
            <label class="form-check-label" for="exampleRadios1">
            tien mat
          </label>
                </div>
                <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="chuyen khoan" >
            <label class="form-check-label" for="exampleRadios2">
            chuyen khoan
          </label>
                </div>

                <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" id="exampleRadios3" value="momo" >
            <img src="images/momo.png" alt="momo" height="32" width="32">
            <label class="form-check-label" for="exampleRadios3">
           momo
          </label>
                </div>

                <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="momo" >
            <img src="images/vnpay.jpg" alt="vnpal" height="64" width="64">
            <label class="form-check-label" for="exampleRadios4">
           vnpay
          </label>
                </div>

                <div class="form-check">
            <input class="form-check-input" type="radio" name="payment" id="exampleRadios5" value="paypal" >
            <img src="images/pp.png" alt="paypal"  height="64" width="64">
            <label class="form-check-label" for="exampleRadios5">
            paypal
          </label>
                </div>


            <p style="float: left;">tổng tiền cần thanh toán:<?php echo number_format($tongtien,0,',','.').'vnd' ?></p>
            <input type="submit" value="thanh toán ngay" name="thanhtoanngay" class="btn btn-danger">
      </div>


  </div>
  </form>
</div>