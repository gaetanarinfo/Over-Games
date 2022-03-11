"use strict";

function checkFormEditArticle(event, id) {
  event.preventDefault(); // Définition de nos constantes

  var div_result = document.getElementById('div-result8');

  if (clickededitarticle == true) {
    jQuery.ajax({
      url: "https://gaetan-seigneur.store/admin/assets/config/edit_article.php",
      data: {
        id: $('#articleEdit').val(),
        createur: $('#createurB').val(),
        categorie: $('#categorieB').val(),
        titre: $('#titreBedit').val(),
        subtitle: $('#subtitreB').val(),
        small_img: $('#smallimgB').val(),
        large_img: $('#largeimgB').val(),
        content2: $('#contenteditB').val(),
        content: $('#contentedit2B_' + id).val(),
        tag_video: $('#tagB').val(),
        video: $('#videoB').val(),
        plateforme: $('#plateforme1B').val(),
        plateforme2: $('#plateforme2B').val(),
        plateforme3: $('#plateforme3B').val(),
        plateforme4: $('#plateforme4B').val(),
        plateforme5: $('#plateforme5B').val(),
        plateforme6: $('#plateforme6B').val(),
        plateforme7: $('#plateforme7B').val(),
        plateforme8: $('#plateforme8B').val(),
        titre2: $('#titre2B').val(),
        img4: $('#img4editB').val(),
        genre: $('#genreB').val(),
        date: $('#dateB').val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(30 169 64)';
          div_result.innerHTML = "<i class='fas fa-check'></i>Le membre est maintenant modifier !";
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