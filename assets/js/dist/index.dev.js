"use strict";

btn_top = document.querySelector(".btn_top");
menu_top = document.querySelector(".container-menu");

function scrollFunction() {
  if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
    btn_top.style.display = "block";
  } else {
    btn_top.style.display = "none";
  }

  if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
    menu_top.classList.add('top-menu');
    menu_top.classList.remove('container-menu');
  } else {
    menu_top.classList.remove('top-menu');
    menu_top.classList.add('container-menu');
  }
}

function topFunction() {
  document.body.scrollTop = 0; // Pour Safari

  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE and Opera
} // Animation Header


setTimeout(function () {
  document.querySelector(".anim-title").style.display = "block";
}, 1800);
setTimeout(function () {
  document.querySelector(".anim-title-2").style.display = "inline-block";
}, 2300);
setTimeout(function () {
  document.querySelector(".anim-title-img").style.display = "block";
}, 2600);
setTimeout(function () {
  document.querySelector(".container-menu").style.display = "block";
}, 3000);
setTimeout(function () {
  $("#loader").remove();
}, 3300); //