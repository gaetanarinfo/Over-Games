"use strict";

$('#btn-reply').click(function () {
  $('#reply').fadeToggle(1500);
  return false;
});

function checkForumComment(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result-fo'),
      message = document.getElementById('messagefoA');

  if (message.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Une erreur est survenue ! ";
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else {
    jQuery.ajax({
      url: "assets/config/forum_add_comment.php",
      data: {
        message: $("#messagefoA").val(),
        forum_id: $("#forum_idfoA").val(),
        forum_id_cat: $("#forum_id_catfoA").val(),
        forum_id_cat_sujet: $("#forum_id_cat_sujetfoA").val(),
        sujet: $("#sujetfoA").val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = '#31bf17';
          div_result.innerHTML = "<i class='fas fa-check'></i>Votre commentaire à été posté ! ";
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            window.location.href = window.location.href;
          }, 2000);
        } else {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(121 12 12)';
          div_result.innerHTML = "<i class='fas fa-times'></i>Une erreur est survenue ! ";
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

function btn_resolved(forum_id, forum_id_cat, forum_id_cat_sujet) {
  var div_result = document.getElementById('div-result-resolved');
  jQuery.ajax({
    url: "assets/config/forum_resolved.php",
    data: {
      id1: forum_id,
      id2: forum_id_cat,
      id3: forum_id_cat_sujet
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#31bf17';
        div_result.innerHTML = "<i class='fas fa-check'></i>Le Sujet est désormais résolue ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          window.location.href = window.location.href;
        }, 2000);
      } else {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = "<i class='fas fa-times'></i>Une erreur est survenue ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      }
    },
    error: function error() {}
  });
  return false;
}

function btn_del_suj(id, id2, id3) {
  var div_result = document.getElementById('div-result-delete-suj');
  jQuery.ajax({
    url: "assets/config/forum_delete.php?id=3",
    data: {
      fo1: id,
      fo2: id2,
      fo3: id3,
      createur: $('#focreateurA').val()
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#31bf17';
        div_result.innerHTML = "<i class='fas fa-check'></i>Le sujet est désormais supprimé ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          var urlcourante = document.location.href;
          window.location.href = window.location.href;
        }, 2000);
      } else {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = "<i class='fas fa-times'></i>Une erreur est survenue ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          div_result.style.display = "none";
        }, 2000);
      }
    },
    error: function error() {}
  });
  return false;
}

;

function btn_edit_suj(id, id2, id3) {
  var div_result = document.getElementById('div-result-edit'),
      titre = document.getElementById('titreeditfoB'),
      content = document.getElementById('contentfoB');

  if (titre.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Votre titre ne doit pas être vide ! ";
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (content.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Votre message ne doit pas être vide ! ";
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else {
    jQuery.ajax({
      url: "assets/config/forum_edit.php",
      data: {
        fo1: id,
        fo2: id2,
        fo3: id3,
        createur: $('#focreateurB').val(),
        content: $('#contentfoB').val(),
        titre: $('#titreeditfoB').val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = '#31bf17';
          div_result.innerHTML = "<i class='fas fa-check'></i>Le sujet est désormais modifié ! ";
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            window.location.href = window.location.href;
          }, 2000);
        } else {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(121 12 12)';
          div_result.innerHTML = "<i class='fas fa-times'></i>Une erreur est survenue ! ";
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            div_result.style.display = "none";
          }, 2000);
        }
      },
      error: function error() {}
    });
    return false;
  }
}

;

function epingle(id, id2, id3, id4) {
  $('#epingle').attr('class', 'd-inline-block fo-epingle-a');
  $('#btn-epingle').attr('title', 'Message épinglé');
  $('#btn-epingle').attr('href', null);
  jQuery.ajax({
    url: "assets/config/forum_epingle.php",
    data: {
      fo1: id,
      fo2: id2,
      fo3: id3,
      createur: id4
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        $.get("https://gaetan-seigneur.store/assets/config/forum_epingle_view.php?id1=" + id + "&id2=" + id2 + "&id3=" + id3, function (data2) {
          $("#result-epingle").html(data2);
        });
      } else {}
    },
    error: function error() {}
  });
  return false;
}

function removeEpingle(id, id2, id3, id4) {
  jQuery.ajax({
    url: "assets/config/forum_epingle_remove.php",
    data: {
      fo1: id,
      fo2: id2,
      fo3: id3
    },
    type: "POST",
    success: function success(data) {
      $('#div-epingle').remove();
    },
    error: function error() {}
  });
  return false;
}