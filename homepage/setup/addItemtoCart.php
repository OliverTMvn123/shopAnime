<?php
require '../../ConnectDB.php';
$id=$_GET['id'];
$nameUser=$_COOKIE['user1'];
$sql="SELECT `Cart` FROM `login` WHERE `Username`=".$nameUser;
$resuft=$conn->query($sql);
$row=$resuft->fetch_assoc();
if($row['Cart']=='')
{
    $a =$id; 
}
else{
    $a = $row['Cart'].",".$id;
}
$sql1="UPDATE `login` SET `Cart`='$a' WHERE `Username`=".$nameUser;

if($resuft1=$conn->query($sql1))
{
    
}

?>