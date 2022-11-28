
<?php



if(isset($_POST['dangnhap'])){


    $email =$_POST['email'];
    $matkhau = $_POST['password'];


    $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";

    $row = mysqli_query($mysqli,$sql);
    
    $count = mysqli_num_rows($row);

    if($count>0){

        $row_data = mysqli_fetch_array($row);

        $_SESSION['dangky'] = $row_data['tenkhachhang']; 

        $_SESSION['id_khachhang'] = $row_data['id_dangky']; 

        if (headers_sent()) {
            die("login suscess: <a href=http://localhost/web_mysqli/index.php?quanly=giohang>");
            header("Location: http://localhost/web_mysqli/index.php?quanly=giohang");

        }
        else{
            exit(header("Location: http://localhost/web_mysqli/index.php?quanly=giohang"));
        }
        header("refresh: 0;");
        // header("Location: http://localhost/web_mysqli/index.php?quanly=giohang");

    }else{
      
       
        echo'<p style="color:red"> mật khẩu hoặc email sai, vui lòng nhập lại</p>';
        
       
    }



}


?>




<form action="" autocomplete="off" method="POST">


            
<table border="1" width="50%" class="table-login" style="text-align: center; border-collapse: collapse;">
    <tr>
        <td colspan="2">đăng nhập </td>
    </tr>
    <tr>
        <td>tài khoản:</td>
        <td><input type="text size="50"  name="email"" placeholder="Email..."></td>
    </tr>
    <tr>
        <td>mật khẩu:</td>
        <td><input type="text  size="50" name="password"  placeholder="mat khau...""></td>

    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="dangnhap" value="đăng nhập"></td>
    </tr>

</table>

</form>