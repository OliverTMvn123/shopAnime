<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/homepage/index.css">
    <link rel="stylesheet" href="./signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="./signup.js"></script>    
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
                <a class="navbar-brand" href="/homepage/index.html"><img id="iconMenu" src="/image/iconMenu.png"
                        alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/homepage/index.html">Trang Chủ</a>
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
                    <form action="/USER/login/login.html">
                        <button class="btn btn-outline-success" style="margin-left:5px; " type="submit">Đăng
                            Nhập</button>
                    </form>
                    <form action="/USER/sign up/signup.html">
                        <button class="btn btn-outline-success" style="margin-left:5px;" type="submit">Đăng Ký</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>
    <div class="container bg-light">
    <?php
            $Email= $_COOKIE['Email'];
            echo('<script>console.log(document.cookie)</script>');
            include  "../../library/PHPMailer-master/src/PHPMailer.php";
            include  "../../library/PHPMailer-master/src/Exception.php";
            include  "../../library/PHPMailer-master/src/OAuthTokenProvider.php";
            include  "../../library/PHPMailer-master/src/OAuth.php";
            include  "../../library/PHPMailer-master/src/POP3.php";
            include  "../../library/PHPMailer-master/src/SMTP.php";
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;
            $mail = new PHPMailer(true);  
            try {
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'dragonhatgame@gmail.com';                 // SMTP username
                $mail->Password = 'fyasslwhavoytxwn';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
            
                //Recipients
                $mail->setFrom('dragonhatgame@gmail.com', 'Mailer');
                $mail->addAddress($Email, 'User');     // Add a recipient
                
            
                //Attachments

                // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            
                //Content

                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'VERIFICATION DACS';
                $mail->Body    = 'ANIMEOLIVERSHOP XIN THÔNG BÁO !? chúng tôi xác nhận được yêu cầu xác nhận đăng kí của bạn. mã xác nhận của bạn là: '.$_COOKIE['verificationCode'];
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                echo("<script> alert('Message has been sent for YOURMAIL pls check this!!!') </script>");
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

    ?>
    <div class="row">
        <div class="col-3 imageADS"> <img src="/image/rightADS.jpg" width="100%" height="100%" alt=""></div>
        <div class='col-6' style="padding:120px">
            
                <h3 >Xác Nhận Thông Tin Đăng Ký </h3>
                <input type="text" class="form-control input1" id="verificationcode" placeholder="Enter verification"
                            name="verification">
                <button type="submit" class="btn btn-primary " style="margin-left:45%" onClick="checkVerification()">Submit</button>
                           
         
        </div>
        <div class="col-3 imageADS"><img src="/image/leftADS.jpg" width="100%" height="100%" alt=""></div>
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
