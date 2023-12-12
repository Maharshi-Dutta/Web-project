
var theAd = 0;
var adImages = new Array("img/scroll1.png","img/scroll2.png","img/scroll3.png","img/scroll4.png","img/scroll5.png");

function rotate() {
     theAd++;
     if (theAd == adImages.length) {
        theAd = 0;
     }
     document.getElementById("scroll").src = adImages[theAd];
     transi
}
function rotateRev()
{theAd--;
    if(theAd<0)
    {
        theAd=4;
      
    }
    else if (theAd == adImages.length) {
        theAd = 0;
     }
     document.getElementById("scroll").src = adImages[theAd];
}
