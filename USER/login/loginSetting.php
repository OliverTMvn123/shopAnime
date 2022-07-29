<?php
require '../../ConnectDB.php';
$Username= $_POST['username'];
$pass = $_POST['password'];

if(empty($Username)||empty($pass))
{
    echo("<script> alert('Vui lòng kiểm tra lại các thông tin đã nhập vào hãy điền đủ chúng') </script>");
    echo("<script> location='./login.html' </script>");
}
else{
    $sql='SELECT * FROM `login`';
    $resuft= $conn->query($sql);
    $flag=0;
    while($row=$resuft->fetch_assoc())
    {
        if($row['Username']==$Username)
        {
            if($row['Password']==sha1($pass))
            {
                $flag=1;
                $per= $row['per'];
            }
        }
    }

    if($flag==1)
    {   
        setcookie("user1",$Username,time()+(83000*30),"/");
        if($per==0)
        {
            echo"<script>alert( 'Đăng Nhập Thành Công!!') ;
            </script>";
           echo("<script> location='../../homepage/index.php' </script>");
        }
        elseif($per==1)
        {
            //admin product manager
            echo"<script>alert( 'Đăng Nhập Thành Công!!') ;
            </script>";
           echo("<script> location='../../Area/productManager/productView.php' </script>");
        }
        elseif($per==2)
        {
             //admin system manager
             echo"<script>alert( 'Đăng Nhập Thành Công!!') ;
             </script>";
            echo("<script> location='../../homepage/index.php' </script>");
        }
       
        
     
    }
    else{
        echo"<script>alert('Tài Khoản Hoặc Mật Khẩu Của Bạn Đã Sai Xin Vui Lòng Kiểm Tra Lại!!') </script>";
        echo("<script> location='./login.php' </script>");
    }
}
?>