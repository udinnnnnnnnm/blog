<?php


if(isset($_POST['doimatkhau'])){


    $taikhoan = $_POST['email'];
    $matkhau_cu = $_POST['password_cu'];
    $matkhau_moi = $_POST['password_moi'];


    $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."' LIMIT 1";
    $row = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($row);

    if($count>0){
        $sql_update = mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."'");
        echo '<p style="color:green">mat khau da dc thay doi"</p>';

    }else{
      
       
       echo '<p style="color:red">mat khau or tk khong dung"</p>';
    }



}


?>






<p>thay đổi mật khẩu</p>
<form action="" autocomplete="off" method="POST">


            
<table border="1" class="table-login" style="text-align: center; border-collapse: collapse;">
    <tr>
        <td colspan="2">Đăng nhập </td>
    </tr>
    <tr>
        <td>tải khoản gmail</td>
        <td><input type="text" name="email"></td>
    </tr>
    <tr>
        <td>mật khẩu cũ</td>
        <td><input type="text" name="password_cu"></td>

    </tr>
    <tr>
        <td>mật khẩu mới</td>
        <td><input type="text" name="password_moi"></td>

    </tr>
    <tr>
        <td colspan="2"><input type="submit" name="doimatkhau" value="doi mat khau"></td>
    </tr>

</table>

</form>


