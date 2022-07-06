
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

