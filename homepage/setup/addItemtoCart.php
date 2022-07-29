<?php
require '../../ConnectDB.php';
if(!empty($_COOKIE['user1']))
{
$id=$_GET['id1'];
$nameUser=$_COOKIE['user1'];
$sql="SELECT `Cart` FROM `login` WHERE `Username`= '$nameUser'";
$resuft=$conn->query($sql);
$row=$resuft->fetch_assoc();

    if($row['Cart']=='')
    {
        $a =$id; 
    }
    else{
        $a = $row['Cart'].",".$id;
    }
    $sql1="UPDATE `login` SET `Cart`='$a' WHERE `Username`='$nameUser'";
    
    if($resuft1=$conn->query($sql1))
    {
        $sql2="SELECT `Cart` FROM `login` WHERE `Username`= '$nameUser'";
        $resuft2=$conn->query($sql);
        $row2=$resuft2->fetch_assoc(); 
        if(empty($row2['Cart']) )
            {
             echo("<script> 
            document.getElementById('numberItem').innerHTML=`<p style='padding-top:3px'>0</p>`;
            </script>");
            }
        else{
            $list = explode(",",$row2['Cart']);
            $countItem=count($list);
                           
            echo("<script> 
            document.getElementById('numberItem').innerHTML=`<p style='padding-top:3px'>$countItem</p>`;
            </script>");
                }
        }
                             
}
else{
    echo("<script>alert('Bro phải đăng nhập đã chứ!!')
    document.getElementById('numberItem').innerHTML=`<p style='padding-top:3px'>0</p>`;</script>");
}

?>