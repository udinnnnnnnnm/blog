<?php
    
       if(isset($_POST['dangky'])){
                $tenkhachhang= $_POST['hovaten'];
                $email= $_POST['email'];
                $dienthoai= $_POST['dienthoai'];
                $matkhau= $_POST['matkhau'];
                $diachi= $_POST['diachi'];
                $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
                VALUE ('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
                if($sql_dangky){
                    echo '<p> bạn đã đăng ký thành công</p>';

                  
                    $_SESSION['dangky'] = $tenkhachhang;
                    $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);


                    if (headers_sent()) {
                        die("đăng ký suscess: <a href=http://localhost/web_mysqli/index.php?quanly=giohang>");
                        header("Location: http://localhost/web_mysqli/index.php?quanly=giohang");
            
                    }
                    else{
                        exit(header("Location: http://localhost/web_mysqli/index.php?quanly=giohang"));
                    }
                    header("Refresh:0; url=index.php");
            


                //    header('Location:index.php?quanly=giohang');
                }



        }
?>


<p>Đăng ký thành viên</p>
<style  type="text/css">
  table.dangky tr td{
            padding:5px;
        }



</style>
      



<form action="" method="POST">


    <table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
        <tr>
            <td>họ và tên</td>
            <td><input type="text" size="50" name="hovaten"></td>

        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" size="50" name="email"></td>

        </tr>
        <tr>
            <td>số điện thoại của bạn</td>
            <td><input type="text" size="50" name="dienthoai"></td>

        </tr>
        <tr>
            <td>địa chỉ</td>
            <td><input type="text" size="50" name="diachi"></td>

        </tr>
        <tr>
            <td>mật khẩu</td>
            <td><input type="text" size="50" name="matkhau"></td>

        </tr>
        <tr>
            
            <td ><input type="submit" size="50" name="dangky" value="đăng ký"></td>
            <td ><a href="index.php?quanly=dangnhap">đăng nhập ngay</a></td>


        </tr>
        
    </table>
</form>