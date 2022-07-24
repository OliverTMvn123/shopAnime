
<?php
print_r($_POST);
require '../../../ConnectDB.php';
$nameP = $_POST['uname'];
$nameCategory = $_POST['nameCategory'];
$price = $_POST['pswd'];
$addressUpload = "../uploads/";
$id= $_POST['id'];
$addressUpload1 =$addressUpload.basename($_FILES['picture']['name']);
$image=$_FILES['picture']['name'];
$sql="UPDATE `product` SET `nameProduct`='$nameP',`nameCategory`='$nameCategory',`Price`='$price',`image`='$image' WHERE `ID`='$id'";

if($conn->query($sql)==true)
    {
       
       
        if(move_uploaded_file($_FILES['picture']['tmp_name'],$addressUpload1 )==true)
        {
            echo('<script>alert("Đã sửa thành công!");</script>');
        }
        echo('<script>location="../ProductView.php"</script>');
    }
    else{
        echo('<script> alert("Đã Sửa Không thành công!");</script>');
        echo('<script>location="../ProductView.php"</script>');
    }
?>
