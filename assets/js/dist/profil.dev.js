"use strict";

var btn_avatar = document.getElementById('btn_avatar');
var btn_background = document.getElementById('btn_background');
var avatar = document.getElementById('avatar-mod');
var background = document.getElementById('background-mod');
var modaltitre = document.getElementById('ModalLabelAvatar');
document.getElementById('div-result').style = 'margin: 0 auto';
btn_avatar.addEventListener('click', function (e) {
  e.preventDefault();
  avatar.style.display = 'block';
  background.style.display = 'none';
  modaltitre.textContent = 'Modifier mon avatar';
});
btn_background.addEventListener('click', function (e) {
  e.preventDefault();
  avatar.style.display = 'none';
  background.style.display = 'block';
  modaltitre.textContent = 'Modifier ma bannière';
});
var form = document.getElementById('formavatar');
var input = form.getElementsByTagName('input');

function checkFormAvatar(event) {
  event.preventDefault();
  var fd = new FormData();
  var files = $('#file')[0].files[0];
  fd.append('file', files);
  $.ajax({
    url: 'assets/config/upload.php',
    type: 'post',
    data: fd,
    contentType: false,
    processData: false,
    success: function success(response) {
      if (response != 0) {
        var div_result = document.querySelector('.div-result');
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#184417';
        div_result.innerHTML = '<i class="fas fa-check"></i> Votre avatar à été modifier !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 600);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 800);
        $("#avatar").attr("src", response);
        jQuery.noConflict();
        $('#avatarModal').modal('hide');
        document.getElementById('signin-btn').style.display = 'none';
      } else {
        var _div_result = document.querySelector('.div-result');

        _div_result.style.display = 'block';
        _div_result.style.opacity = "1";
        _div_result.style.color = 'rgb(121 12 12)';
        _div_result.innerHTML = "<i class='fas fa-times'></i>Désoler, votre avatar n'a pas été uploader ! ";
        setTimeout(function () {
          _div_result.style.transition = "opacity 500ms";
          _div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          _div_result.style.display = "none";
        }, 2000);
      }
    }
  });
}

function checkFormBackground(event) {
  event.preventDefault();
  var fd2 = new FormData();
  var files = $('#file2')[0].files[0];
  fd2.append('file', files);
  $.ajax({
    url: 'assets/config/upload2.php',
    type: 'post',
    data: fd2,
    contentType: false,
    processData: false,
    success: function success(response2) {
      if (response2 != 0) {
        var div_result = document.querySelector('.div-result');
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#d6d145';
        div_result.innerHTML = '<i class="fas fa-check"></i> Votre bannière à été modifier !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 600);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 800);
        $("profil-back").attr("src", response2);
        jQuery.noConflict();
        $('#avatarModal').modal('hide');
        document.getElementById('signin-btn2').style.display = 'none';
      } else {
        var _div_result2 = document.querySelector('.div-result');

        _div_result2.style.display = 'block';
        _div_result2.style.opacity = "1";
        _div_result2.style.color = 'rgb(121 12 12)';
        _div_result2.innerHTML = "<i class='fas fa-times'></i>Désoler, votre bannière n'a pas été uploader ! ";
        setTimeout(function () {
          _div_result2.style.transition = "opacity 500ms";
          _div_result2.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          _div_result2.style.display = "none";
        }, 2000);
      }
    }
  });
} // ajout de la classe JS à HTML


document.querySelector("html").classList.add('js'); // initialisation des variables

var fileInput = document.querySelector(".input-file"),
    button = document.querySelector(".input-file-trigger"),
    the_return = document.querySelector(".file-return"); // action lorsque la "barre d'espace" ou "Entrée" est pressée

button.addEventListener("keydown", function (event) {
  if (event.keyCode == 13 || event.keyCode == 32) {
    fileInput.focus();
  }
}); // action lorsque le label est cliqué

button.addEventListener("click", function (event) {
  fileInput.focus();
  return false;
}); // affiche un retour visuel dès que input:file change

fileInput.addEventListener("change", function (event) {
  the_return.innerHTML = this.value;
  document.getElementById('signin-btn').style.display = 'block';
}); // ajout de la classe JS à HTML

document.querySelector("html").classList.add('js2'); // initialisation des variables

var fileInput2 = document.querySelector(".input-file2"),
    button2 = document.querySelector(".input-file-trigger2"),
    the_return2 = document.querySelector(".file-return2"); // action lorsque la "barre d'espace" ou "Entrée" est pressée

button2.addEventListener("keydown", function (event) {
  if (event.keyCode == 13 || event.keyCode == 32) {
    fileInput2.focus();
  }
}); // action lorsque le label est cliqué

button2.addEventListener("click", function (event) {
  fileInput2.focus();
  return false;
}); // affiche un retour visuel dès que input:file change

fileInput2.addEventListener("change", function (event) {
  the_return2.innerHTML = this.value;
  document.getElementById('signin-btn2').style.display = 'block';
});

function DisableInput() {
  document.getElementById('nomA').disabled = false;
  document.getElementById('prenomA').disabled = false;
  document.getElementById('emailA').disabled = false;
  document.getElementById('pseudoA').disabled = false;
  document.getElementById('adresseA').disabled = false;
  document.getElementById('adresse2A').disabled = false;
  document.getElementById('villeA').disabled = false;
  document.getElementById('paysA').disabled = false;
  document.getElementById('postalCodeA').disabled = false;
  document.getElementById('sexeA').disabled = false;
  document.getElementById('ageA').disabled = false;
}

var btn_modif = document.getElementById('btn_modif');
var formModif = document.getElementById('formModif');
var btn_anul = document.getElementById('btn_anul');
var inputModif = formModif.getElementsByTagName('input');
var btn_modif_valid = document.getElementById('btn_modif_valid');
btn_modif_valid.style.display = 'none';
btn_anul.style.display = 'none';
btn_modif.addEventListener('click', function (e) {
  e.preventDefault();
  btn_modif_valid.style.display = "inline-block";
  btn_anul.style.display = "inline-block";
  btn_modif.style.display = "none";
  DisableInput();
});
btn_anul.addEventListener('click', function (e) {
  e.preventDefault();
  btn_anul.style.display = "none";
  btn_modif.style.display = "block";
  btn_modif_valid.style.display = 'none';
  document.getElementById('nomA').disabled = true;
  document.getElementById('prenomA').disabled = true;
  document.getElementById('emailA').disabled = true;
  document.getElementById('pseudoA').disabled = true;
  document.getElementById('adresseA').disabled = true;
  document.getElementById('adresse2A').disabled = true;
  document.getElementById('villeA').disabled = true;
  document.getElementById('paysA').disabled = true;
  document.getElementById('postalCodeA').disabled = true;
  document.getElementById('sexeA').disabled = true;
  document.getElementById('ageA').disabled = true;
});