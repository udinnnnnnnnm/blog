<div class="clear"></div> 
<div class="main">
    <?php



     if(isset($_GET['action']) && $_GET['query']){ 
        $tam = $_GET['action'];
        $query = $_GET['query'];

    }else{
        $tam ='';
        $query ='';
    }
    if($tam=='quanlydanhmucsanpham' && $query =='them'){

        include("modul/quanlydanhmucsp/them.php");
        include("modul/quanlydanhmucsp/lietke.php");

    }elseif($tam=='quanlydanhmucsanpham' && $query =='sua'){ 
        
        include("modul/quanlydanhmucsp/sua.php");

    }elseif($tam=='quanlysp' && $query =='them'){ 
        
        include("modul/quanlysp/them.php");
        include("modul/quanlysp/lietke.php");

    }elseif($tam=='quanlysp' && $query =='sua'){
        include("modul/quanlysp/sua.php");
    
    }elseif($tam=='quanlydonhang' && $query =='lietke'){
        include("modul/quanlydonhang/lietke.php");

    }elseif($tam=='quanlydanhmucbaiviet' && $query =='them'){
        include("modul/quanlydanhmucbaiviet/them.php");
        include("modul/quanlydanhmucbaiviet/lietke.php");

    }elseif($tam=='quanlydanhmucbaiviet' && $query =='sua'){
        include("modul/quanlydanhmucbaiviet/sua.php");
        
    }elseif($tam=='donhang' && $query =='xemdonhang'){
        include("modul/quanlydonhang/xemdonhang.php");
    }elseif($tam=='quanlybaiviet' && $query =='them'){
        include("modul/quanlybaiviet/them.php");
        include("modul/quanlybaiviet/lietke.php");

    }elseif($tam=='quanlybaiviet' && $query =='sua'){
        include("modul/quanlybaiviet/sua.php");
        
    }elseif($tam=='quanlyweb' && $query =='capnhap'){
        include("modul/thongtinweb/quanly.php");
        
    }
    else{
     include("modul/dashboard.php");
        }
     ?>
</div>