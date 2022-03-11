"use strict";

function checkFormCat(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result-forum'),
      icone = document.getElementById('iconefoA'),
      titre = document.getElementById('titrefoA'),
      titre2 = document.getElementById('titre2foA'),
      content = document.getElementById('contentfoA'),
      content2 = document.getElementById('content2foA'),
      rang = document.getElementById('rangfoA'),
      topic = document.getElementById('topicfoA');

  if (icone.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Votre icône ne doit pas être vide ! ";
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (titre.value.length == 0) {
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
  } else if (titre2.value.length == 0) {
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
  } else if (content2.value.length == 0) {
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
  } else if (rang.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Votre rang ne doit pas être vide ! ";
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else if (topic.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Votre topic ne doit pas être vide ! ";
    setTimeout(function () {
      div_result.style.transition = "opacity 500ms";
      div_result.style.opacity = "0";
    }, 1500);
    setTimeout(function () {
      div_result.style.display = "none";
    }, 2000);
  } else {
    jQuery.ajax({
      url: "assets/config/add_forum_cat.php",
      data: {
        icone: $("#iconefoA").val(),
        titre: $("#titrefoA").val(),
        content: $("#contentfoA").val(),
        titre2: $("#titre2foA").val(),
        rang: $("#rangfoA").val(),
        content2: $("#content2foA").val(),
        topic: $("#topicfoA").val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(30 169 64)';
          div_result.innerHTML = "<i class='fas fa-check'></i>Votre catégorie à été posté ! ";
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            var urlcourante = document.location.href;
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
}

function checkFormSujet(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result-forum'),
      titre = document.getElementById('titrefoA2'),
      content = document.getElementById('contentfoA2'),
      cat = document.getElementById('catfoA');

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
  } else if (cat.value.length == 0) {
    div_result.style.display = 'block';
    div_result.style.opacity = "1";
    div_result.style.color = 'rgb(121 12 12)';
    div_result.innerHTML = "<i class='fas fa-times'></i>Une catégorie doit être sélectionné ! ";
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
      url: "assets/config/add_forum_sujet.php",
      data: {
        cat: $("#catfoA").val(),
        titre: $("#titrefoA2").val(),
        content: $("#contentfoA2").val(),
        forum_id: $("#forum_idfoA").val(),
        forum_id_cat: $("#forum_id_catfoA").val(),
        forum_id_cat_sujet: $("#forum_id_cat_sujetfoA").val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(30 169 64)';
          div_result.innerHTML = "<i class='fas fa-check'></i>Votre topic à été posté ! ";
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            var urlcourante = document.location.href;
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
}

function checkFormSubCat(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result-forum-subcat'),
      titre = document.getElementById('titrefoB'),
      titre2 = document.getElementById('titrefoB2'),
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
  } else if (titre2.value.length == 0) {
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
      url: "assets/config/add_forum_souscat.php",
      data: {
        titre: $("#titrefoB").val(),
        titre2: $("#titrefoB2").val(),
        content: $("#contentfoB").val(),
        id: $("#forum_idfoB").val(),
        id2: $("#forum_id_catfoB").val()
      },
      type: "POST",
      success: function success(data) {
        if (data != 0) {
          div_result.style.display = 'block';
          div_result.style.opacity = "1";
          div_result.style.color = 'rgb(30 169 64)';
          div_result.innerHTML = "<i class='fas fa-check'></i>Votre sous catégorie à été posté ! ";
          setTimeout(function () {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
          }, 1500);
          setTimeout(function () {
            var urlcourante = document.location.href;
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
} // Delete Catégorie Admin & Modo


$('#btn-del-cat').click(function () {
  $('#ModalLabelRemove').html('ÊTES-VOUS SUR DE VOULOIRS SUPPRIMÉ LA CATÉGORIE ?');
});

function btn_del_cat(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result-delete');
  jQuery.ajax({
    url: "assets/config/forum_delete.php?id=1",
    data: {
      id1: $('#catfoB2').val(),
      id3: $('#catfoB').val()
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#31bf17';
        div_result.innerHTML = "<i class='fas fa-check'></i>La catégorie est désormais supprimé ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          var urlcourante = document.location.href;
          window.location.reload(urlcourante);
        }, 1400);
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

$('#btn-del-top').click(function () {
  $('#ModalLabelRemove2').html('ÊTES-VOUS SUR DE VOULOIRS SUPPRIMÉ LA CATÉGORIE ?');
});

function btn_del_top(event) {
  event.preventDefault();
  var div_result = document.getElementById('div-result-delete-top');
  jQuery.ajax({
    url: "assets/config/forum_delete.php?id=2",
    data: {
      id1: $('#catfoB2A').val(),
      id3: $('#catfoBA').val()
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#31bf17';
        div_result.innerHTML = "<i class='fas fa-check'></i>Le topic est désormais supprimé ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          var urlcourante = document.location.href;
          window.location.reload(urlcourante);
        }, 1400);
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

function checkFormSujet2() {
  var div_result = document.getElementById('div-result-edit');
  jQuery.ajax({
    url: "assets/config/forum_edit_topic.php",
    data: {
      forum: $('#foedit1').val(),
      forum2: $('#foedit2').val(),
      forum3: $('#foedit3').val(),
      titre: $('#titrefoeditA').val(),
      content: $('#contentfoeditA').val(),
      topic: $('#topiceditA').val(),
      resolved: $('#topicresolvedA').val()
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#31bf17';
        div_result.innerHTML = "<i class='fas fa-check'></i>Le topic est désormais modifié ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          var urlcourante = document.location.href;
          window.location.reload(urlcourante);
        }, 1400);
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
}

function checkFormSubCat2() {
  var div_result = document.getElementById('div-result-forum-subcat2');
  jQuery.ajax({
    url: "assets/config/forum_edit_cat.php",
    data: {
      forum: $('#foedit1_2').val(),
      forum2: $('#foedit2_2').val(),
      forum3: $('#foedit3_2').val(),
      titre: $('#titreeditcatfoB').val(),
      titre2: $('#titreeditcatfoB2').val(),
      content: $('#contenteditcatfoB').val(),
      topic: $('#topicresolvededitcatA').val()
    },
    type: "POST",
    success: function success(data) {
      if (data != 0) {
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = '#31bf17';
        div_result.innerHTML = "<i class='fas fa-check'></i>Le topic est désormais modifié ! ";
        setTimeout(function () {
          div_result.style.transition = "opacity 500ms";
          div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function () {
          var urlcourante = document.location.href;
          window.location.reload(urlcourante);
        }, 1400);
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
}