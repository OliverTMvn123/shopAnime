<?php
require '../../../ConnectDB.php';
$nameCategory= $_GET["uname"];
$sql="INSERT INTO `category`(`nameCategory`) VALUES ('$nameCategory')";
$sql1="SELECT * FROM `category`";
$resuft=$conn->query($sql1);
$flag=0;
while($row=$resuft->fetch_assoc())
{
    if($row['nameCategory']==$nameCategory)
    {
        $flag=1;
    }
}
if($flag==0)
{
    if($conn->query($sql)==true)
    {
        echo('<script>alert("Đã thêm thành công!");</script>');
        echo('<script>location="../addCategoryView.php"</script>');
    }
    else{
        echo('<script> alert("Đã thêm Không thành công!");</script>');
        echo('<script>location="../addCategoryView.php"</script>');
    }
}
else{
    echo('<script> alert("Đã thêm Không thành công! Loại sản phẩm bạn thêm vào đã trùng");</script>');
        echo('<script>location="../addCategoryView.php"</script>');
}
?>