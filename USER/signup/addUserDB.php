<?php
require "../../ConnectDB.php";
$sql= $_COOKIE['dataUser'];
if($conn->query($sql)==true)
{
    echo"<script>var a= confirm('Chúc Mừng Bàn Đã Đăng Ký Thành Công!!! Bạn sẽ được quay lại trang chủ Đăng Nhập và tận hưởng cùng AnimeOliverShop.com nhé');
    if(a==true)
    {
        location='../../homepage/index.php';
    }
    </script>";

}
else{
    echo("sai rồi ông cháu ơi");
}
?>