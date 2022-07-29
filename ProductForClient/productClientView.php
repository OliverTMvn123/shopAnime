<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/homepage/index.css">
    <link rel="stylesheet" href="./productClientView.css">
    <link rel='icon' href='/image/iconMenu.png' type='image/x-icon'> </link>
    <script src="/homepage/index.js"></script>
    <script src="../USER/signup/signup.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">    
    <title>AnimeShop
    </title>
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
    <div class="ImageGirl">
        <h5 id="SayHi" style="color:white;width: 100px; visibility:hidden;">Hi
            <?php $user1=$_COOKIE['user1'];  echo("".$user1) ?>
        </h5>
        <a onClick="visiableText()"><img id="headGirl" src="/image/head.png" width="100px" alt=""></a>
    </div>
    <div class="cartControll">
        <div id="cart" class='bg-light'>
        <a href="/CART/cartView.php"><img src="/image/cart.png" alt="" ></a> 
        </div>
        <div id="numberItem" class='bg-danger'>
                <?php
                    require '../ConnectDB.php';
                    $nameUser=$_COOKIE['user1'];
                
                    $sql="SELECT `Cart` FROM `login` WHERE `Username`= '$nameUser'";
                    $resuft=$conn->query($sql);
                    $row=$resuft->fetch_assoc();
                    if(!empty($nameUser))
                    {
                        if(empty($row['Cart']) )
                        {
                            echo("<script> 
                            document.getElementById('numberItem').innerHTML=`<p style='padding-top:3px'>0</p>`;
                            </script>");
                        }
                        else{
                            $list = explode(",",$row['Cart']);
                            $countItem=count($list);
                           
                            echo("<script> 
                            document.getElementById('numberItem').innerHTML=`<p style='padding-top:3px'>$countItem</p>`;
                            </script>");
                        }
                    }
                    else{
                        echo("<script> 
                        
                            document.getElementById('numberItem').innerHTML=`<p style='padding-top:3px'>0</p>`;
                            </script>");
                    }
                    
                ?>
        </div>
    </div>
    <div class="menu">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img id="iconMenu" src="/image/iconMenu.png" alt=""></a>
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
                            <li><a class="dropdown-item" href="./SelectByCategory/figure.php?id=0">Mô hình</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="./SelectByCategory/clothes.php?id=0">Áo - Trang Phục</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="./SelectByCategory/BaloAndMore.php?id=0">Balo dụng cụ học tập</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="./SelectByCategory/keychain.php?id=0">Móc Khóa Huy Hiệu</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="./SelectByCategory/Accessories.php?id=0">Trang sức</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="./SelectByCategory/watch.php?id=0">Đồng Hồ</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="./SelectByCategory/Comingsoon.php?id=0">Gối Thú Nhồi Bông</a></li>
                                <hr>
                                <li><a class="dropdown-item" href="./SelectByCategory/Comingsoon.php?id=0">In Sản Phẩm Theo Yêu Cầu</a></li>

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
                               // document.getElementById("btnLogOut").setAttribute("style", "display:none");


                            }

                        </script>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="container bg-light">
        <div class="row">
            <div class="col-2" id="leftmenu">
                <ul id="listmenu">
                <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon1.png?v=245"
                            alt=""> <a href="./SelectByCategory/figure.php?id=0" target="_top">Mô hình</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon2.png?v=245"
                            alt=""><a href="./SelectByCategory/clothes.php?id=0" target="_top"> Áo - Trang Phục</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon3.png?v=245"
                            alt=""><a href="./SelectByCategory/BaloAndMore.php?id=0" target="_top"> Balo dụng cụ học tập</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon4.png?v=245"
                            alt=""><a href="./SelectByCategory/keychain.php?id=0" target="_top"> Móc Khóa Huy Hiệu</a></li>
                    <li> <img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon5.png?v=245"
                            alt=""><a href="./SelectByCategory/Accessories.php?id=0" target="_top"> Trang sức</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon6.png?v=245"
                            alt=""> <a href="./SelectByCategory/watch.php?id=0" target="_top"> Đồng Hồ</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon7.png?v=245"
                            alt=""><a href="./SelectByCategory/Comingsoon.php?id=0" target="_top"> Phụ Kiện Đầu</a> </li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon8.png?v=245"
                            alt=""><a href="./SelectByCategory/Comingsoon.php?id=0" target="_top"> Gối Thú Nhồi Bông</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon9.png?v=245"
                            alt=""><a href="./SelectByCategory/Comingsoon.php?id=0" target="_top"> In Sản Phẩm Theo Yêu Cầu</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon10.png?v=245"
                            alt=""><a href="./SelectByCategory/Comingsoon.php?id=0" target="_top"> Phụ Kiện Khác</a></li>
                </ul>

            </div>
           
            <div class="col-9 rightContent">
                <div class="col-9" style="height:30px"></div>
                <div class="row SelectProduct">
                <?php
                require '../ConnectDB.php';
                $sql1='SELECT COUNT(*) FROM `product`  ORDER BY ID DESC';
                $resuft1= $conn->query($sql1);
                $countList= $resuft1->fetch_assoc();
                if($countList['COUNT(*)']!=0)
                {
                    $sql='SELECT * FROM `product` ORDER BY ID DESC';
                    if(isset($_GET['id']))
                    {
                        $check=$_GET['id'];
                    }
                    else{
                        $i=0;
                        $check=1;
                    }
                    $resuft= $conn->query($sql);
                    $count=0;
                    $list1;
                    while($row=$resuft->fetch_assoc())
                    {
                            
                            echo(' <div class="col-3 divProduct">
                                <img src="/Area/productManager/uploads/'.$row['image'].'" class="imageProduct" alt="">
                                <div class="infor">
                                    <div class="name">
                                        <h5>'.$row['nameProduct'].'</h5>
                                    </div>
                                    <div class="Price">
                                    <h3 style="color:red">'.$row['Price'].'$</h3>   
                                    </div>
                                    <div class="btnProduct">
                                        <button width="10px" onClick="detailt('.$row['ID'].')" type="submit"><img src="/image/searchIcon.png" width="15px" alt=""></button>
                                        <button> Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                                </div>');
                        }
                    }
                else{
                    echo("<h1 style='color:red; text-align:center; margin-top:50px'> KHÔNG CÓ SẢN PHẨM NÀO Ở ĐÂY </h1> <img src='/image/iconMenu.png'  width='300px' height='700'>");
                 }
                
               ?>
                </div>                     
            </div>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>

</body>

</html>