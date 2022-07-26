<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='icon' href='/image/iconMenu.png' type='image/x-icon'> </link>
    <link rel="stylesheet" href="/homepage/index.css">
    <link rel="stylesheet" href="./signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>AnimeShop</title>
</head>

<body class="bg-dark">
    <div class="top">
        <img src="/image/topicon.png" width="60px" onclick="hello()" alt="">
        <script>
            function hello() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </div>
    <div class="menu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/homepage/index.php"><img id="iconMenu" src="/image/iconMenu.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/homepage/index.php">Trang Chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sản phẩm
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Quần áo anime</a></li>
                                <li><a class="dropdown-item" href="#">Phụ Kiện Anime</a></li>
                                <li><a class="dropdown-item" href="#">Sách</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Hướng Dẫn Mua Hàng </a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <form action="/USER/login/login.php">
                        <button class="btn btn-outline-success" style="margin-left:5px; " type="submit">Đăng
                            Nhập</button>
                    </form>
                    <form action="/USER/sign up/signup.php">
                        <button class="btn btn-outline-success" style="margin-left:5px;" type="submit">Đăng Ký</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>
    <div class="container bg-light">
            <?php
            require "../../ConnectDB.php";
            $username=$_POST['Username'];
            $password=$_POST['password'];
            $repassword=$_POST['repassword'];
            $sdt=$_POST['sdt'];
            $address=$_POST['address'];
            $email=$_POST['email'];
           
            if(empty($username)||empty($password)||empty($repassword)||empty($sdt)||empty($address)||empty($email))
            {
                echo("<script> alert('Vui lòng kiểm tra lại các thông tin đã nhập vào hãy điền đủ chúng') </script>");
                echo("<script> location='./signup.php' </script>");
            }
            else{
                if($password == $repassword)
                {
                    $checkUsername ="SELECT `Username` FROM `login`";
                    $resuft= $conn->query($checkUsername);
                    $i=0;
                    while($row=$resuft->fetch_assoc())
                    {
                        if($row['Username']==$username)
                        {
                            $i=1;
                        }
                    }
                    if($i==0)
                    {
                        setcookie("Email",$email,time()+(83000*30),"/");
                        $Maxacthuc = rand(100000,999999);
                        setcookie("verificationCode",$Maxacthuc,time()+(83000*30),"/");
                        $sql="INSERT INTO `login`(`Username`, `Password`, `Email`, `per`, `phoneNumber`, `address`) 
                        VALUES ('".$username."','".sha1($password)."','".$email."','0','".$sdt."','".$address."')";
                        setcookie("dataUser",$sql,time()+(83000*30),"/");
                        echo("<script> location='./verification.php' </script>");
                    }
                    else{
                        echo("<script> alert('Tài Khoản Đã Tồn Tại Vui Lòng Kiểm Tra Lại') </script>");
                        echo("<script> location='./signup.php' </script>");
                    }
                    
                }
                else{
                    echo("<script> alert('Mật khẩu và nhập lại mật khẩu không khớp vui lòng nhập lại') </script>");
                    echo("<script> location='./signup.php' </script>");
                }
            }
        ?>
    </div>
    <footer class="bg-light text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a href="https://www.facebook.com/profile.php?id=100010757443088">
                    <img src="/image/iconSocial1.jpg" width="50" alt=""></a>

                <a href="#">
                    <img src="/image/iconSocial2.png" width="55" alt=""></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright:
            <a class="text-white" href="">OliverTMvn</a>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            Design by:
            <a class="text-white" href="">OliverTMvn </a>
            Contact: dragonhatgame@gmail.com
        </div>

        <!-- Copyright -->
    </footer>
    <div class="clear">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

</body>

</html>

