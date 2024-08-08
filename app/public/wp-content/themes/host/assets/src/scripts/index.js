import "./utils/swiper";
import "./utils/header";
import "./utils/functions";

var iphone = document.getElementById("phone");
var camera = document.getElementById("tablet");

var layer = document.getElementById("intro-mackup");

if(layer){
layer.addEventListener("mousemove", function(e) {
  var ivalueX = (e.pageX * -1) / 30;
  var ivalueY = (e.pageY * -1) / 30;
  var cvalueX = (e.pageX * -1) / 40;
  var cvalueY = (e.pageY * -1) / 60;
  console.log("ok");
  iphone.style.transform = "translate3d(" + ivalueX + "px," + ivalueY + "px, 0)";
  camera.style.transform = "translate3d(" + cvalueX + "px," + cvalueY + "px, 0)";
});
}
 