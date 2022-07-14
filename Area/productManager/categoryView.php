<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/homepage/index.css">
    <script src="/homepage/index.js"></script>
    <script src="/USER/signup/signup.js"></script>
    <link rel="stylesheet" href="/USER/signup/signup.css">
    <link rel="stylesheet" href="./productView.css">
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
    <div class="ImageGirl">
        <h5 id="SayHi" style="color:white; visibility:hidden;">Hi <?php $user1=$_COOKIE['user1'];  echo("".$user1) ?></h5> 
        <a onClick="visiableText()"><img id="headGirl" src="/image/head.png"  width="100px"  alt=""></a>
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
                  
                    <div class="User">
                        <form id="btnLogout" action="/USER/logout/logout.php" method="post" style="display:none">
                            <button  class="btn btn-outline-success" style="margin-left:5px; " type="submit">Đăng Xuất</button>
                        </form>
                        <form id="btnLogin" action="/USER/login/login.php">
                            <button  class="btn btn-outline-success" style="margin-left:5px; " type="submit">Đăng Nhập</button>
                        </form>
                        <form id="btnSignup" action="/USER/signup/signup.php">
                            <button  class="btn btn-outline-success" style="margin-left:5px;" type="submit">Đăng Ký</button>
                        </form>
                        <script>
                            var a= getCookie('user1');
                            if(a!='')
                            {
                                document.getElementById("btnLogin").setAttribute("style", "display:none");
                                document.getElementById("btnLogout").setAttribute("style", "display:block");
                            }
                            else{
                                document.getElementById("btnLogin").setAttribute("style", "display:block");
                                document.getElementById("btnLogOut").setAttribute("style", "display:none");
                            }
                          
                        </script>
                    </div>
                </div>
             
            </div>
        </nav>
    </div>
    <div class="container bg-light" >
        <div id="AreaView" class="row">
            <div class="controllerProduct col-3" id="leftmenuCP">
                <ul id="listmenu">
                    <li  > <a href="productView.php" target="_top">Danh Sách Sản Phẩm</a></li>
                    <li style="background-color:lightskyblue;"><a href="categoryView.php" target="_top">Loại Sản Phẩm</a></li>
                    <li><a href="addProductView.php" target="_top">Thêm Sản Phẩm</a></li>
                    <li><a href="addCategoryView.php" target="_top">Thêm Loại Sản Phẩm</a></li>
                    </ul>
            </div>        
            <div class="col-9" id='selectCP'>
                  <h1 align="center"> Danh Sách Sản Phẩm</h1>
                  <hr> 
                <div class="khung">
                    <div class="listproduct">
                    <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th align="center">Tên Loại Sản Phẩm</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                require '../../ConnectDB.php';
                                $sql='SELECT * FROM `category`';
                                $resuft=$conn->query($sql);
                                while($row=$resuft->fetch_assoc())
                                {
                                    echo("<tr>
                                            <th>".$row['ID']."</th>
                                            <th >".$row['nameCategory']."</th>
                                        </tr>");
                                }             
                                ?>
                            </tbody>
                        </table>
                        <div class="clear"></div>
                    
                  </div>
                </div>  
                  <br>
                  <br>
            </div>
           
        </div>
        <div class="clear">
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