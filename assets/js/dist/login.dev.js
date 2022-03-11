"use strict";

function checkFormLogin(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result-login');
  jQuery.ajax({
    url: "assets/config/connexion.php",
    data: {
      email: $("#emailLogin").val(),
      password: $("#passwordLogin").val()
    },
    type: "POST",
    success: function success(data) {
      if (data == "0") {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>' + "Vous n'avez pas validé votre compte !";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      } else if (data === "non") {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-check"></i> Vos informations ne sont pas correct !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      } else {
        document.getElementById('login-modal').style.display = 'none';
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#12b73b';
        div_result.innerHTML = '<i class="fas fa-check"></i> Connexion à votre compte réussi !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 600);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 800);
        setTimeout(function () {
          var urlcourante = document.location.href;
          window.location.reload(urlcourante);
        }, 600);
      }
    },
    error: function error() {
      event.preventDefault();
    }
  });
  return false;
}

var email = document.getElementById('emailLogin');
var password = document.getElementById('passwordLogin');
var checkBoxLogin = document.getElementById('checkBoxConfirmLogin');
checkBoxLogin.addEventListener('change', function () {
  sessionStorage.setItem('emailLogin', email.value);
  sessionStorage.setItem('passwordLogin', password.value);
});

if (sessionStorage.getItem('emailLogin') != undefined && sessionStorage.getItem('passwordLogin') != undefined) {
  checkBoxLogin.checked = true;
  email.value = sessionStorage.getItem('emailLogin');
  password.value = sessionStorage.getItem('passwordLogin');
  checkBoxLogin.addEventListener('change', function () {
    email.value = '';
    password.value = '';
    sessionStorage.removeItem('emailLogin');
    sessionStorage.removeItem('passwordLogin');
  });
}