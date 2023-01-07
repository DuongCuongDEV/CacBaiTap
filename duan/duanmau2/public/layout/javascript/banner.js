var images = [];
var index = 0;
function loadanh() {
    for (var i = 0; i < 4; i++) {
        images[i] = new Image();
        images[i].src = "image/banner" + i + ".jpg";
    }
}

var t = null;
var flag_click = 0;
function Auto() {
    if (flag_click == 0) {
        t = setInterval(function () { next(); }, 2000);
        flag_click = 1;
    }
}
