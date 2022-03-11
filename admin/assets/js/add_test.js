function checkFormTest(event) {

    event.preventDefault()

    // Définition de nos constantes
    const div_result = document.getElementById('div-result5');

    jQuery.ajax({
        url: "https://gaetan-seigneur.store/admin/assets/config/add_test.php",
        data: {
            titre: $("#titreC").val(),
            lien: $("#lienC").val(),
            small_img: $("#small_imgA").val(),
            description: $("#descriptionA").val(),
            plateforme: $("#plateformeA").val(),
            genre: $("#genreC").val(),
        },
        type: "POST",
        success: function(data) {

            if (data != 0) {

                div_result.style.display = 'block';
                div_result.style.opacity = "1";
                div_result.style.color = 'rgb(30 169 64)';
                div_result.innerHTML = "<i class='fas fa-check'></i>Le test à bien été ajouter !";

                setTimeout(function() {
                    div_result.style.transition = "opacity 500ms";
                    div_result.style.opacity = "0";
                }, 1500);
                setTimeout(function() {
                    div_result.style.display = "none";
                }, 2000);

                console.log(data);

            } else {
                div_result.style.display = 'block';
                div_result.style.opacity = "1";
                div_result.style.color = 'rgb(121 12 12)';
                div_result.innerHTML = '<i class="fas fa-times"></i>Désolé, une erreur est survenue !';
                setTimeout(function() {
                    div_result.style.transition = "opacity 500ms";
                    div_result.style.opacity = "0";
                }, 1500);
                setTimeout(function() {
                    div_result.style.display = "none";
                }, 2000);
            }

        },
        error: function() {
            event.preventDefault();
        }
    });
    return false;
}

//