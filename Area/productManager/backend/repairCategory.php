
<?php
print_r($_POST);
require '../../../ConnectDB.php';
$nameP = $_POST['uname'];
$id= $_POST['id'];

$sql="UPDATE `category` SET `nameCategory`='$nameP' WHERE `ID`='$id'";

if($conn->query($sql)==true)
    {
       
        echo('<script>alert("Đã sửa thành công!");</script>');
        echo('<script>location="../categoryView.php"</script>');
    }
    else{
        echo('<script> alert("Đã Sửa Không thành công!");</script>');
        echo('<script>location="../categoryView.php"</script>');
    }
?>
