"use strict";

// Définition de nos constantes
var div_result = document.getElementById('div-result-message');

function remove_message(message) {
  jQuery.ajax({
    url: "https://gaetan-seigneur.store/admin/assets/config/remove_message.php",
    data: {
      id: message
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(30 169 64)';
        div_result.innerHTML = "<i class='fas fa-check'></i>Le message est maintenant supprimé !";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
        setTimeout(function () {
          document.location.reload();
        }, 1000);
      } else {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Désolé, une erreur est survenue !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      }
    },
    error: function error() {
      message.preventDefault();
    }
  });
  return false;
}

function message_lu(message) {
  jQuery.ajax({
    url: "https://gaetan-seigneur.store/admin/assets/config/message_lu.php",
    data: {
      id: message
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(30 169 64)';
        div_result.innerHTML = "<i class='fas fa-check'></i>Vous avez lu le message !";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
        setTimeout(function () {
          document.location.reload();
        }, 1000);
      } else {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Désolé, une erreur est survenue !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      }
    },
    error: function error() {
      message.preventDefault();
    }
  });
  return false;
}

function message_archive(message) {
  jQuery.ajax({
    url: "https://gaetan-seigneur.store/admin/assets/config/message_archive.php",
    data: {
      id: message
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(30 169 64)';
        div_result.innerHTML = "<i class='fas fa-check'></i>Vous avez archivé le message !";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
        setTimeout(function () {
          document.location.reload();
        }, 1000);
      } else {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Désolé, une erreur est survenue !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      }
    },
    error: function error() {
      message.preventDefault();
    }
  });
  return false;
}

function message_reply_view(id) {
  $('#reply-message').show();
  $.get("https://gaetan-seigneur.store/admin/assets/config/view_email.php?id=" + id, function (data) {
    $("body");
    $('#emailformA').attr('value', data.email);
    $('#sendMail').attr('onClick', "sendMailContact(" + id + ");");
  }, "json");
}

function sendMailContact(id_message) {
  jQuery.ajax({
    url: "https://gaetan-seigneur.store/admin/assets/config/post_email.php",
    data: 'email=' + $("#emailformA").val() + '&message=' + $("#messageformA").val() + '&id=' + id_message,
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(30 169 64)';
        div_result.innerHTML = "<i class='fas fa-check'></i>Le message à été envoyer !";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
        setTimeout(function () {
          $('#reply-message').hide(50);
        }, 2500);
      } else {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Désolé, une erreur est survenue !';
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      }
    }
  });
}