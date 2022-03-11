"use strict";

var form2 = document.getElementById('comment');
var input2 = form2.getElementsByTagName('input');
var message = document.getElementById('messageA');

function checkFormComment(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result');

  if (message.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Votre commentaire ne doit pas être vide ! ";
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else {
    jQuery.ajax({
      url: "assets/config/add_comment.php",
      data: {
        article_id: $("#article_idA").val(),
        message: $("#messageA").val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(30 169 64)';
          div_result.innerHTML = "<i class='fas fa-check'></i>Votre commentaire à été posté ! ";
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            var urlcourante = document.location.href + '#comment';
            window.location.reload(urlcourante);
          }, 1400);
        }
      },
      error: function error() {
        event.preventDefault();
      }
    });
    return false;
  }
} //