<?php
print_r($_FILES);
require '../../../ConnectDB.php';
$nameP = $_POST['uname'];
$nameCategory = $_POST['nameCategory'];
$price = $_POST['pswd'];
$addressUpload = "../uploads/";
$addressUpload1 =$addressUpload.basename($_FILES['picture']['name']);
$image=$_FILES['picture']['name'];

$sql="INSERT INTO `product`( `nameProduct`, `nameCategory`, `Price`,`image`) VALUES ('$nameP','$nameCategory','$price','$image')";
if($conn->query($sql)==true)
    {
       
       
        if(move_uploaded_file($_FILES['picture']['tmp_name'],$addressUpload1 )==true)
        {
            echo('<script>alert("Đã thêm thành công!");</script>');
        }
        echo('<script>location="../addProductView.php"</script>');
    }
    else{
        echo('<script> alert("Đã thêm Không thành công!");</script>');
        echo('<script>location="../addProductView.php"</script>');
    }
?>
