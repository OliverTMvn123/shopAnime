<?php
$id = $_GET['id1'];
require '../../ConnectDB.php';
$sql='SELECT * FROM `product` WHERE `ID`='.$id;
echo('<button id="closedetailItem" onclick="closedetailItem()">X</button> ');
$resuft= $conn->query($sql);
if( $conn->query($sql))
{
    $row=$resuft->fetch_assoc();
    echo('
        <div class="row detailtSelect">
            <div class="col-6">
                <img src="/Area/productManager/uploads/'.$row['image'].'">
            </div>
            <div class="col-6 " id="info">
                <div class="Info">
                    <h1 >'.$row['nameProduct'].'</h1>
                </div>
                <div class="Info">
                    <h3 style="color:red"> Giá bán:'.$row['Price'].'$</h3>
                </div>
                <div class="Info">
                     <button class="btn btn-outline-warning" style="margin-left:5px; " onclick="chuyenhuong2()" type="submit">Thêm vào giỏ hàng</button>
                     <button class="btn btn-outline-success" style="margin-left:5px; " onclick="chuyenhuong2()" type="submit">Mua Ngay</button>
                </div>
            </div>
        </div>      
');
}
else{

}

?>