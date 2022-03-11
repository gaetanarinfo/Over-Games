function EditMembre(email) {
    $.get("https://gaetan-seigneur.store/admin/assets/config/view_membre.php?email=" + email, function(data) {
        $("body")
        $('#emailEdit').attr('value', email);
        $('#nomB').attr('value', data.nom);
        $('#prenomB').attr('value', data.prenom);
        $('#sexeB').attr('value', data.sexe);
        $('#sexeBB').html(data.sexe);
        $('#ageB').attr('value', data.age);
        $('#ageB').html(data.age);
        $('#pseudoB').attr('value', data.pseudo);
        $('#emailB').attr('value', data.email);
        $('#verifB').attr('value', data.verif);
        $('#premiumB').attr('value', data.premium);

        if (data.verif == "1") {
            $('#verifBB').html("Oui");
            $('#verifBB').attr('value', data.verif);
        } else {
            $('#verifBB').html("Non");
            $('#verifBB').attr('value', data.verif);
        }

        if (data.premium == "1") {
            $('#premiumBB').html("Oui");
            $('premiumBB').attr('value', data.premium);
        } else {
            $('#premiumBB').html("Non");
            $('#premiumBB').attr('value', data.premium);
        }

        $('#adresseB').attr('value', data.adresse);
        $('#adresse2B').attr('value', data.adresse2);
        $('#postalCodeB').attr('value', data.postalCode);
        $('#villeB').attr('value', data.ville);
        $('#paysB').attr('value', data.pays);
        $('#paysBB').html(data.pays);
        $('#bloqueB').attr('value', data.bloque);

        if (data.premium == "1") {
            $('#bloqueBB').html("Oui");
            $('#bloqueBB').attr('value', data.bloque);
        } else {
            $('#bloqueBB').html("Non");
            $('#bloqueBB').attr('value', data.bloque);
        }

    }, "json");
}

function EditArticle(id) {
    $.get("https://gaetan-seigneur.store/admin/assets/config/view_article.php?id=" + id, function(data) {
        $("body")
        $('#edit-Modal-article').attr('onsubmit', 'checkFormEditArticle(event, ' + id + ')')
        $('#createurB').attr('value', data.createur);
        $('#categorieBB').attr('value', data.categorie);
        $('#categorieBB').html(data.categorie);
        $('#articleEdit').attr('value', id);
        $('#titreBedit').attr('value', data.titre);
        $('#subtitreB').attr('value', data.subtitre);
        $('#smallimgB').attr('value', data.smallimg);
        $('#largeimgB').attr('value', data.largeimg);
        $('#contenteditB').html(data.content2);

        $('#contentedit2B').attr('id', 'contentedit2B_' + id);

        $(document).ready(function() {
            $('#contentedit2B_' + id).ckeditor();
            $('#contentedit2B_' + id).html(data.content);
        });

        $('contentedit2B').val(data.content);

        $('#img1editB').attr('value', data.img1);
        $('#img2editB').attr('value', data.img2);
        $('#img3editB').attr('value', data.img3);

        $('#tagB').attr('value', data.tagvideo);
        $('#tagBB').attr('value', data.tagvideo);
        $('#tagBB').html(data.tagvideo);

        $('#videoB').attr('value', data.video);
        $('#plateforme1B').attr('value', data.plateforme);
        $('#plateforme2B').attr('value', data.plateforme2);
        $('#plateforme3B').attr('value', data.plateforme3);
        $('#plateforme4B').attr('value', data.plateforme4);
        $('#plateforme5B').attr('value', data.plateforme5);
        $('#plateforme6B').attr('value', data.plateforme6);
        $('#plateforme7B').attr('value', data.plateforme7);
        $('#plateforme8B').attr('value', data.plateforme8);
        $('#titre2B').attr('value', data.titre2);
        $('#img4editB').attr('value', data.img4);
        $('#genreB').attr('value', data.genre);
        $('#dateB').attr('value', data.date);
    }, "json");
}

function EditTest(id) {

    $.get("https://gaetan-seigneur.store/admin/assets/config/view_test.php?id=" + id, function(data) {
        $("body")
        $('#testEdit').attr('value', id)
        $('#titreeditC').attr('value', data.titre);
        $('#lieneditC').attr('value', data.lien);
        $('#small_imgeditC').attr('value', data.small_img);
        $('#descriptioneditc').html(data.description);
        $('#plateformeeditC').attr('value', data.plateforme);
        $('#dateseditC').attr('value', data.dates);
        $('#heureeditC').attr('value', data.heure);
    }, "json");
}

function EditTuto(id) {
    $.get("https://gaetan-seigneur.store/admin/assets/config/view_tuto.php?id=" + id, function(data) {
        $("body")
        $('#tutoEdit').attr('value', id);
        $('#titretutoA').attr('value', data.titre);
        $('#contenttutoA').html(data.content);
        $('#apitutoA').attr('value', data.api);
        $('#lientutoA').attr('value', data.lien);
        $('#chainetutoA').attr('value', data.chaine);
        $('#iconetutoA').attr('value', data.icone);
        $('#datetutoA').attr('value', data.date);
        $('#imagetutoA').attr('value', data.image);

        $('#cattutoA').attr('value', data.cat);

        if (data.cat == "HTML") {
            $('#cattutoAA').html('Html');
        } else if (data.cat == "PHP") {
            $('#cattutoAA').html('Php');
        } else if (data.cat == "CSS") {
            $('#cattutoAA').html('Css');
        } else if (data.cat == "SASS") {
            $('#cattutoAA').html('Sass');
        } else if (data.cat == "JS") {
            $('#cattutoAA').html('JavaScript');
        } else if (data.cat == "JAVA") {
            $('#cattutoAA').html('Java');
        }

    }, "json");
}