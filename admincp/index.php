<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./css/styleadmincp.css">
    
</head>
<?php 
session_start();
// if(!isset($_SESSION['dangnhap'])){
//     header('Location:index.php');

// }

?>
<body>
    <h3 class="title_admin">welcom to admincp</h3> 
<div class="wrapper">

    <?php

        include("config/config.php");
        include("modul/header.php");
        include("modul/menu.php");
        include("modul/main.php");
        include("modul/footer.php");
        ?>
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
     CKEDITOR.replace('tomtat');
     CKEDITOR.replace('thongtinlienhe');
    CKEDITOR.replace('noidung');
</script>


<script type="text/javascript">
    $(document).ready(function(){
        thongke();
   var char = new Morris.Area({
 
            element:'chart',
 
            xkey: 'date',
 
            ykeys: ['date','order','sales','quantily'],

        labels: ['don hang','doanh thu','so luong ban ra']
                });
                $('.select-date').change(function(){
                    var thoigian = $(this).val();
                    if(thoigian=='7ngay'){
                        var text ='7 ngay qua';
                    }else if(thoigian=='28ngay'){
                        var text ='28 ngay qua';
                    }else if (thoigian=='90ngay'){
                        var text = '90ngay qua';
                    }else{
                        var text = '365  ngay qua';
                    } 
                    $.ajax({
                url:"modul/thongke.php",
                method:"POST",
                dataType:"JSON",
                data:{thoigian:thoigian},
                success:function(data)
                {
                    char.setData(data);
                    $('#text-date').text(text);
                }
            });
        })









                 function thongke(){
                 var text='365 ngay qua';
                 $('#text-date').text(text);

                $.ajax({
                url:"modul/thongke.php",
                method:"POST",
                dataType:"JSON",
                success:function(data)
                {
                    char.setData(data);
                    $('#text-date').text(text);
                }
                  });

        }
    });


    
</script>
  </body>

</html>