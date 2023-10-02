var estMobile = window.innerWidth < 768;

var lien = document.getElementById("mobile");

if (estMobile) {
   lien.href = "mobile.html";
} else {
lien.href = "mario-gh-pages/index.html";
}

var lien = document.getElementById("mobile2");

if (estMobile) {
   lien.href = "mobile.html";
} else {
lien.href = "snake.html";
}

var lien = document.getElementById("mobile3");

if (estMobile) {
   lien.href = "mobile.html";
} else {
lien.href = "tetris.html";
}