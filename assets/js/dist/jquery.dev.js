"use strict";

// Modal
$('#login').css('cursor', 'pointer');
$('#login-2').css('cursor', 'pointer');
$('#login').click(function () {
  $("#loginModal").modal();
});
$('#login-2').click(function () {
  $("#loginModal").modal();
});
$('#btn-recover').click(function () {
  $('#ModalLabelLogin').text('Mot de passe oublier');
  $('#login-modal').addClass("fade");
  setTimeout(function () {
    $('#login-modal').hide(1000);
  }, 500);
  setTimeout(function () {
    $('#password-modal').addClass("fade show");
    $('#password-modal').show(1000);
  }, 550);
});
$('#login_btn').click(function () {
  $('#ModalLabelLogin').text('Connexion');
  setTimeout(function () {
    $('#password-modal').hide(1000);
  }, 500);
  setTimeout(function () {
    $('#login-modal').addClass("fade show");
    $('#login-modal').show(1000);
  }, 550);
});
var form = document.getElementById('form');
var input = form.getElementsByTagName('input');

function recupPseudo() {
  jQuery.ajax({
    url: 'assets/config/membre.php?pseudo=' + document.getElementById('pseudoA').value,
    type: 'GET',
    contentType: "application/json",
    dataType: 'json',
    success: function success(data) {
      document.getElementById('pseudoVerif').value = data;
    }
  });
}

recupPseudo();

function checkForm(event) {
  event.preventDefault(); // Définition de nos constantes

  var pass = document.getElementById('passwordA').value;
  var passConfirm = document.getElementById('passwordConfirm').value;
  var div_result = document.querySelector('.div-result');
  var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;

  if (!pass.match(regex)) {
    // Gestion du div_result (error)
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i>Le mot de passe ne respect pas nos conditions !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (pass !== passConfirm) {
    // Gestion du div_result (error)
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = '<i class="fas fa-times"></i>Les mots de passe ne sont pas identique !';
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (pass.match(regex) && pass === passConfirm) {
    if (document.getElementById('pseudoA').value === document.getElementById('pseudoVerif').value) {
      div_result.style.display = 'block';
      div_result.style.opacity = "1";
      div_result.style.color = 'rgb(121 12 12)';
      div_result.innerHTML = '<i class="fas fa-times"></i>' + document.getElementById('pseudoVerif').value + ' existe déjà dans notre base !';
      setTimeout(function () {
        div_result.style.transition = "opacity 500ms";
        div_result.style.opacity = "0";
      }, 1500);
      setTimeout(function () {
        div_result.style.display = "none";
      }, 2000);
    } else {
      jQuery.ajax({
        url: "assets/config/sign_in.php",
        data: {
          nom: $("#nomA").val(),
          prenom: $("#prenomA").val(),
          email: $("#emailA").val(),
          pseudo: $("#pseudoA").val(),
          password: $("#passwordA").val(),
          adresse: $("#adresseA").val(),
          adresse2: $("#adresse2A").val(),
          ville: $("#villeA").val(),
          pays: $("#paysA").val(),
          postalCode: $("#postalCodeA").val()
        },
        type: "POST",
        success: function success(data) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = '#045518';
          div_result.innerHTML = '<i class="fas fa-check"></i>Pour valider votre inscription merci de cliquer sur le lien';
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            div_result.style.display = "none";
          }, 2000);
          document.getElementById('signin-btn').disabled = true;
          input.enabled = false;
          recupPseudo();
        },
        error: function error() {
          event.preventDefault();
        }
      });
      return false;
    }
  }

  return false;
} //