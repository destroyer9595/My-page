var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);

var element = document.getElementById("ancienID");

if (isMobile) {
    element.id = "mobile";
}
