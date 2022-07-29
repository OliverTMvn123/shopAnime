<?php
require "../../ConnectDB.php";
$sql= $_COOKIE['dataUser'];
if($conn->query($sql)==true)
{
    echo"<script>var a= confirm('Chúc Mừng Bàn Đã Đăng Ký Thành Công!!! Bạn sẽ được quay lại trang chủ Đăng Nhập và tận hưởng cùng AnimeOliverShop.com nhé');
    document.cookie ='dataUser=;expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    if(a==true)
    {
        location='../login/login.php';
    }
    </script>";

}
else{
    echo("sai rồi ông cháu ơi");
}
?>