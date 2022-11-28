
<p>giỏ hàng mới
  <?php
if(isset($_SESSION['dangky'])){
  echo 'xin chao:'.'<span>'.$_SESSION['dangky'].'</span>';
  echo $_SESSION['id_khachhang'];
}
?>
</p>

<?php

    if(isset($_SESSION['cart'])){
       
    }
?>

<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="index.php?quanly=giohang" >giỏ hàng</a></span> </div>
    <div class="step "> <span><a href="index.php?quanly=vanchuyen" >vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thanhtoan" >thanh toán</a><span> </div>
    <div class="step"> <span><a href="index.php?quanly=donhangdadat" >lịch sử đơn hàng</a><span> </div>
    
  </div>
  <!-- end Responsive Arrow Progress Bar -->
 
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
    <th>quản lý</th>
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
      <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">cong</a>
      <?php echo $cart_item['soluong']; ?>
      <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">tru</a>


    </td>
    
    
    
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnd'; ?></td>
    <td><?php echo $thanhtien; ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">xoa</a></td>
    


   
  </tr>
  



  <?php


    }
    ?>
        <tr>
    <td colspan="8"><p style="float:left;">tong tien<?php echo number_format($tongtien,0,',','.').'vnd';  ?></p>
        <p style="float:right;"><a href="pages/main/themgiohang.php?xoatatca=1 ?>">xoa tat ca</a> </p>
        <div style="clear: both;"></div> 
    <?php
    if(isset($_SESSION['dangky'])){
      ?>
    <p><a href="index.php?quanly=vanchuyen">hình thức vận chuyển</a></p>
    <?php
    }else{
      ?>
      <p><a href="index.php?quanly=dangky">đăng ký đặt hàng</a></p>
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
