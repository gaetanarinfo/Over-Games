"use strict";

var form2 = document.getElementById('formContact');
var input2 = form2.getElementsByTagName('input');

function checkFormContact(event) {
  event.preventDefault(); // Définition de nos constantes

  var div_result = document.querySelector('.div-result');
  var email = document.getElementById('emailA');
  var nom = document.getElementById('nomA');
  var prenom = document.getElementById('prenomA');
  var bug = document.getElementById('bugA');
  var sujet = document.getElementById('sujetA');
  var message = document.getElementById('messageA');

  if (email.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i> Votre adresse email ne doit pas être vide !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (nom.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i> Votre nom ne doit pas être vide !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (prenom.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i> Votre prénom ne doit pas être vide !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (bug.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i> Bug ou autre ne doit pas être vide !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (sujet.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i> Votre sujet ne doit pas être vide !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (message.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i> Votre message ne doit pas être vide !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else {
    jQuery.ajax({
      url: "assets/config/contact.php",
      data: {
        nom: $("#nomA").val(),
        prenom: $("#prenomA").val(),
        email: $("#emailA").val(),
        sujet: $("#sujetA").val(),
        bug: $("#bugA").val(),
        message: $("#messageA").val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          console.log(data);
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = '#045518';
          div_result.innerHTML = '<i class="fas fa-check"></i>Message envoyé avec success !';
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            div_result.style.display = "none";
          }, 2000);
          document.getElementById('signin-btn').disabled = true;
          jQuery.noConflict();
          $('#registerModal').modal('show');
        }
      },
      error: function error() {
        event.preventDefault();
      }
    });
    return false;
  }
} //