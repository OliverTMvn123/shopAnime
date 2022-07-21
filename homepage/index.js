

function visiableText(){
    document.getElementById("SayHi").style.visibility='inherit';
    let count = 0;

    interval = setInterval(() => {
        count++;
        if (count >= 6) {
            document.getElementById("SayHi").style.visibility='hidden';
                  clearInterval(interval);
         }
       }, 300);
}
function detailt(i){
    document.getElementById('detailItem').setAttribute("style","display:block");
    $(document).ready(function(){
        $.get("./setup/selectItem.php",{id1:i},function(data){
            $("#detailItem").html(data);
        });

    })    

}
function detailt1(i){
    document.getElementById('detailItem').setAttribute("style","display:block");
    $(document).ready(function(){
        $.get("../../homepage/setup/selectItem.php",{id1:i},function(data){
            $("#detailItem").html(data);
        });

    })    

}
function closedetailItem(){
    document.getElementById('detailItem').setAttribute("style","display:none");
}
 function chuyenhuong1(){
    location='/ProductForClient/SelectByCategory/figure.php?id=0';
}
function chuyenhuong2(){
    location='/ProductForClient/SelectByCategory/clothes.php?id=0';
}
function chuyenhuong3(){
    location='/ProductForClient/SelectByCategory/BaloAndMore.php?id=0';
}function chuyenhuong4(){
    location='/ProductForClient/productClientView.php?id=0';
}