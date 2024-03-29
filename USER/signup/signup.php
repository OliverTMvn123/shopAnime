<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/homepage/index.css">
    <link rel='icon' href='/image/iconMenu.png' type='image/x-icon'> </link>
    <link rel="stylesheet" href="./signup.css">
    <script src="/homepage/index.js"></script>
    <script src="./signup.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>AnimeShop</title>
</head>

<body class="bg-dark">
<div class="top">
        <img src="/image/topicon1.png" width="60px" onclick="hello()" alt="">
        <script>
            function hello() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>
    </div>
    <div id="detailItem" >
            
            </div>
    <div class="ImageGirl">
        <h5 id="SayHi" style="color:white;width: 100px; visibility:hidden;">Hi
            <?php $user1=$_COOKIE['user1'];  echo("".$user1) ?>
        </h5>
        <a onClick="visiableText()"><img id="headGirl" src="/image/head.png" width="100px" alt=""></a>
    </div>

    <div class="menu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="/homepage/index.php"><img id="iconMenu" src="/image/iconMenu.png" alt=""></a>
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
                            <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/figure.php?id=0">Mô hình</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/clothes.php?id=0">Áo - Trang Phục</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/BaloAndMore.php?id=0">Balo dụng cụ học tập</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/keychain.php?id=0">Móc Khóa Huy Hiệu</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/Accessories.php?id=0">Trang sức</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/watch.php?id=0">Đồng Hồ</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/Comingsoon.php?id=0">Gối Thú Nhồi Bông</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="/ProductForClient/SelectByCategory/Comingsoon.php?id=0">In Sản Phẩm Theo Yêu Cầu</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Hướng Dẫn Mua Hàng </a>
                        </li>
                    </ul>
                    <form action='/ProductForClient/searchView.php' class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" name='search' aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <div class="User">
                        <form id="btnLogout" action="/USER/logout/logout.php" method="post" style="display:none">
                            <button class="btn btn-outline-success" style="margin-left:5px; " type="submit">Đăng
                                Xuất</button>
                        </form>
                        <form id="btnLogin" action="/USER/login/login.php">
                            <button class="btn btn-outline-success" style="margin-left:5px; " type="submit">Đăng
                                Nhập</button>
                        </form>
                        <form id="btnSignup" action="/USER/signup/signup.php">
                            <button class="btn btn-outline-success" style="margin-left:5px;" type="submit">Đăng
                                Ký</button>
                        </form>
                        <script>
                            var a = getCookie('user1');
                            if (a != '') {
                                document.getElementById("btnLogin").setAttribute("style", "display:none");
                                document.getElementById("btnLogout").setAttribute("style", "display:block");
                                document.getElementById("headGirl").setAttribute("style", "visibility:inherit");
                            }
                            else {
                                document.getElementById("btnLogin").setAttribute("style", "display:block");
                                document.getElementById("headGirl").setAttribute("style", "visibility:hidden");
                                //document.getElementById("btnLogOut").setAttribute("style", "display:none");


                            }

                        </script>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container bg-light">
        <div class="row">
            <div class="col-3 imageADS"> <img src="/image/rightADS.jpg" width="306" height="432" alt="">
            </div>
            <div class="formcontrol col-6">
                <h3> Đăng Ký Tài Khoản</h3>
                <form action="./signup1.php" method="post">
                    <div class="mb-2 mt-2">
                        <label for="Username" class="form-label">Tên đăng nhập:</label>
                        <input type="text" class="form-control " id="username" placeholder="Enter Username"
                            name="Username">
                    </div>
                    <div class="mb-2 mt-2">
                        <label for="password" class="form-label">Mật Khẩu:</label>
                        <input type="password" class="form-control " id="password" placeholder="Enter Password"
                            name="password">
                    </div>
                    <div class="mb-2 mt-2">
                        <label for="password" class="form-label"> Nhập Lại Mật Khẩu:</label>
                        <input type="password" class="form-control " id="repassword" placeholder="Enter rePassword"
                            name="repassword">
                    </div>
                    <div class="mb-2 mt-2">
                        <label for="SDT" class="form-label">Số Điện Thoại:</label>
                        <input type="text" class="form-control " id="sdt" placeholder="Enter sdt" name="sdt">
                    </div>
                    <div class="mb-2 mt-2">
                        <label for="address" class="form-label">Địa Chỉ:</label>
                        <input type="text" class="form-control " id="address" placeholder="Enter address"
                            name="address">
                    </div>
                    <div class="mb-2 mt-2">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control " id="email" placeholder="Enter email"
                            name="email">
                    </div>
                    <button type="submit" class="btn btn-primary " style="margin-left:45%">Submit</button>
                </form>
            </div>
            <div class="col-3 imageADS"><img src="/image/leftADS.jpg" width="306" height="432" alt=""></div>
        </div>
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