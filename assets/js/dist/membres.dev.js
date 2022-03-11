"use strict";

document.getElementById("btn-users").addEventListener('click', function () {
  document.querySelector("#menu").style.display = 'none';
  document.querySelector("#menu-2").style.display = 'block';
});
document.getElementById("btn-users-2").addEventListener('click', function () {
  document.querySelector("#menu").style.display = 'block';
  document.querySelector("#menu-2").style.display = 'none';
});
$('#logout').click(function () {
  var div_result = document.querySelector('.div-result');
  div_result.style.display = 'block';
  div_result.style.opacity = "1";
  div_result.style.color = '#d6d145';
  div_result.innerHTML = '<i class="fa fa-exclamation" aria-hidden="true"></i> Déconnexion réussi, à bientôt !';
  setTimeout(function () {
    div_result.style.transition = "opacity 500ms";
    div_result.style.opacity = "0";
  }, 600);
  setTimeout(function () {
    div_result.style.display = "none";
  }, 800);
  setTimeout(function () {
    $.get("deconnexion", function (data) {
      window.location = '/';
    });
  }, 1400);
}); // NavBar

menu_top = document.querySelector(".container-menu");
menu_top2 = document.querySelector("#menu-2");

function scrollFunctionMenu() {
  if (document.body.scrollTop > 950 || document.documentElement.scrollTop > 950) {
    menu_top.classList.add('top-menu');
    menu_top.classList.remove('container-menu');
    menu_top2.classList.add('top-menu');
    menu_top2.classList.remove('container-menu');
  } else {
    menu_top.classList.remove('top-menu');
    menu_top.classList.add('container-menu');
    menu_top2.classList.remove('top-menu');
    menu_top2.classList.add('container-menu');
  }
}

function topFunction() {
  document.body.scrollTop = 0; // Pour Safari

  document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE and Opera
}

function date_heure(id) {
  date = new Date();
  annee = date.getFullYear();
  moi = date.getMonth();
  mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
  j = date.getDate();
  jour = date.getDay();
  jours = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
  h = date.getHours();

  if (h < 10) {
    h = "0" + h;
  }

  m = date.getMinutes();

  if (m < 10) {
    m = "0" + m;
  }

  s = date.getSeconds();

  if (s < 10) {
    s = "0" + s;
  }

  resultat = jours[jour] + ' ' + j + ' ' + mois[moi] + ' ' + annee + ' il est ' + h + ':' + m + ':' + s;
  document.getElementById(id).innerHTML = resultat;
  setTimeout('date_heure("' + id + '");', '1000');
  return true;
}

window.onload = date_heure('date_heure');
setTimeout(function () {
  document.querySelector(".membres-container").style.display = "block";
}, 3600);