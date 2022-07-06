<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="./index.js"></script>
    <script src="../USER/signup/signup.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>AnimeShop
    </title>
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
        <h5 id="SayHi"  style="color:white;width: 100px; visibility:hidden;">Hi <?php $user1=$_COOKIE['user1'];  echo("".$user1) ?></h5> 
        <a onClick="visiableText()"><img id="headGirl" src="/image/head.png"  width="100px"  alt=""></a>
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
                            <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
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
                                document.getElementById("headGirl").setAttribute("style", "visibility:inherit");
                            }
                            else{
                                document.getElementById("btnLogin").setAttribute("style", "display:block");
                                document.getElementById("headGirl").setAttribute("style", "visibility:hidden");
                                document.getElementById("btnLogOut").setAttribute("style", "display:none");
                                
                                
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
                            alt=""> <a href="" target="_top">Mô hình</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon2.png?v=245"
                            alt=""><a href="" target="_top"> Áo - Trang Phục</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon3.png?v=245"
                            alt=""><a href="" target="_top"> Balo dụng cụ học tập</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon4.png?v=245"
                            alt=""><a href="" target="_top"> Móc Khóa Huy Hiệu</a></li>
                    <li> <img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon5.png?v=245"
                            alt=""><a href="" target="_top"> Trang sức</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon6.png?v=245"
                            alt=""> <a href="" target="_top"> Đồng Hồ</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon7.png?v=245"
                            alt=""><a href="" target="_top"> Phụ Kiện Đầu</a> </li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon8.png?v=245"
                            alt=""><a href="" target="_top"> Gối Thú Nhồi Bông</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon9.png?v=245"
                            alt=""><a href="" target="_top"> In Sản Phẩm Theo Yêu Cầu</a></li>
                    <li><img src="https://theme.hstatic.net/1000273792/1000446123/14/sidebarleft_icon10.png?v=245"
                            alt=""><a href="" target="_top"> Phụ Kiện Khác</a></li>
                </ul>

            </div>
            <div class="col-9 rightContent">
                <div id="poster">
                    <img src="/image/poster.jpg" width="98%" height="400" alt="">
                </div>
            </div>
        </div>
        <div class="newItemManager">
            <h2> Sản phẩm mới nhất </h2>
            <div class="row newItem">
                <div class="col-3 item">
                    <div class="pictureItem">
                        <img id="" src="/image/item1.jpg" width="100%" height="60%" alt="">
                    </div>
                    <div class="contentItem">
                        <h4 class="nameItem">Item1</h4>
                        <h3 class="price">20000$</h4>
                            <button width="10px"><img src="/image/searchIcon.png" width="15px" alt=""></button>
                            <button> Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="col-3 item">
                    <div class="pictureItem">
                        <img id="" src="/image/item2.jpg" width="100%" height="60%" alt="">
                    </div>
                    <div class="contentItem">
                        <h4 class="nameItem">Item1</h4>
                        <h3 class="price">20000$</h4>
                            <button width="10px"><img src="/image/searchIcon.png" width="15px" alt=""></button>
                            <button> Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="col-3 item">
                    <div class="pictureItem">
                        <img id="" src="/image/item3.jpg" width="100%" height="60%" alt="">
                    </div>
                    <div class="contentItem">
                        <h4 class="nameItem">Item1</h4>
                        <h3 class="price">20000$</h4>
                            <button width="10px"><img src="/image/searchIcon.png" width="15px" alt=""></button>
                            <button> Thêm vào giỏ hàng</button>
                    </div>
                </div>
                <div class="col-3 item">
                    <div class="pictureItem">
                        <img id="" src="/image/item4.jpg" width="100%" height="60%" alt="">
                    </div>
                    <div class="contentItem">
                        <h4 class="nameItem">Item1</h4>
                        <h3 class="price">20000$</h4>
                            <button width="10px"><img src="/image/searchIcon.png" width="15px" alt=""></button>
                            <button> Thêm vào giỏ hàng</button>
                    </div>
                </div>

            </div>
        </div>
        <div class="Figure">

            <div class="row">
                <div class="col-3">
                    <h2> Mô Hình </h2>
                </div>
                <div class="col-9 controlBar"> 
                    
                </div>
            </div>
            <div class="row">
                <div class="col-3"><img src="/image/thumbnail.png" width="306px" alt=""></div>
                <div class="col-9 itemFigure">
                    <div class="row">
                        <div class="col-6 COL">
                            <div class="row-3 itemFigure1 ">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                        </div>
                        <div class="col-6 COL">
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="Figure ">

            <div class="row">
                <div class="col-3">
                    <h2> Quần áo </h2>
                </div>
                <div class="col-9 controlBar"> 
                </div>
            </div>
            <div class="row">
                <div class="col-3"><img src="/image/thumbnail.png" width="306px" alt=""></div>
                <div class="col-9 itemFigure">
                    <div class="row">
                        <div class="col-6 COL">
                            <div class="row-3 itemFigure1 ">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                        </div>
                        <div class="col-6 COL">
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="Figure">

            <div class="row">
                <div class="col-3">
                    <h2> Balo - dụng cụ học tập </h2>
                </div>
                <div class="col-9 controlBar"> 
                </div>
            </div>
            <div class="row">
                <div class="col-3"><img src="/image/thumbnail.png" width="306px" alt=""></div>
                <div class="col-9 itemFigure">
                    <div class="row">
                        <div class="col-6 COL">
                            <div class="row-3 itemFigure1 ">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                        </div>
                        <div class="col-6 COL">
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                            <div class="row-3 itemFigure1">
                                <div class="col-7">
                                    <h5>nameProduct</h4>
                                        <h4>price</h3>
                                            <button width="8px"><img src="/image/searchIcon.png" width="15px"
                                                    alt=""></button>
                                            <button> Thêm vào giỏ hàng</button>
                                </div>
                                <div class="col-5"><img src="" width="194" height="128" alt=""></div>
                            </div>
                        </div>

                    </div>
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