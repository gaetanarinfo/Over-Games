"use strict";

function checkFormEditTest(event) {
  event.preventDefault(); // Définition de nos constantes

  var div_result = document.getElementById('div-result9');

  if (clickededittest == true) {
    jQuery.ajax({
      url: "https://gaetan-seigneur.store/admin/assets/config/edit_test.php",
      data: {
        id: $("#testEdit").val(),
        titre: $('#titreeditC').val(),
        lien: $('#lieneditC').val(),
        small_img: $('#small_imgeditC').val(),
        description: $('#descriptioneditc').val(),
        plateforme: $('#plateformeeditC').val(),
        dates: $('#dateseditC').val(),
        heure: $('#heureeditC').val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(30 169 64)';
          div_result.innerHTML = "<i class='fas fa-check'></i>Le test est maintenant modifier !";
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
        event.preventDefault();
      }
    });
    return false;
  }
}

;