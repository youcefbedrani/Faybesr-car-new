var slideimage = ["image/rang1.jpeg", "image/audi3.jpeg", "image/mersed1.jpeg"];
var slider_image = document.querySelector(".slide_image");
var i = 0;
function prev() {
  if (i <= 0) i = slideimage.length;
  i--;
  return SetImg();
}
function next() {
  if (i >= slideimage.length - 1) i = -1;
  i++;
  return SetImg();
}
function SetImg() {
  return slider_image.setAttribute("src", "" + slideimage[i]);
}
var Slidehsow = function () {
  document.slideone.src = slideimage[i];
  if (i < slideimage.length - 1) {
    i++;
  } else {
    i = 0;
  }
  setTimeout("Slidehsow()", 4000);
};
Slidehsow();
// This code for button menu
var clicker = document.getElementById("container");
var count = 0;
function myMove() {
  clicker.classList.toggle("change");
  count += 1;
  console.log(count);
  if (count % 2 != 0) {
    document.getElementById("textformenu").style.visibility = "visible";
    document.getElementById("textformenu").style.transition = "transform 1s";
    document.getElementById("textformenu").style.transform = "scale(8,16)";
  }
  if (count % 2 == 0) {
    document.getElementById("textformenu").style.transform = "scale(0,3)";
    document.getElementById("textformenu").style.right = "-50px";
    document.getElementById("textformenu").style.top = "-50px";
  }
  return count;
}
// This code is for slide image
var slideimage2 = [
  "image/phone/1.jpeg",
  "image/phone/2.jpg",
  "image/phone/3.jpeg",
  "image/phone/4.jpeg",
];
var slider_image2 = document.querySelector(".not_img");
var j = 0;
var Slidehsowtwo = function () {
  document.slideformobile.src = slideimage2[j];
  if (j < slideimage2.length - 1) {
    j++;
  } else {
    j = 0;
  }
  setTimeout("Slidehsowtwo()", 4000);
};
Slidehsowtwo();
//this code for scrolling to top
//####################################################################
var scrollup = document.getElementById("scrolltop");
window.onscroll = function () {
  scrolling();
};
function scrolling() {
  if (
    document.body.scrollTop > 700 ||
    document.documentElement.scrollTop > 2100
  ) {
    scrollup.style.visibility = "visible";
  } else {
    scrollup.style.visibility = "hidden";
  }
}
function doscroll() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
