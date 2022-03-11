function checkFormNews(event) {

    event.preventDefault()

    // Définition de nos constantes
    const div_result = document.getElementById('div-result2');

    jQuery.ajax({
        url: "https://gaetan-seigneur.store/admin/assets/config/add_news.php",
        data: {
            createur: $("#createurANews").val(),
            categorie: $("#categorieANews").val(),
            titre: $("#titreANews").val(),
            subtitle: $("#subtitreANews").val(),
            small_img: $("#smallimgANews").val(),
            large_img: $("#largeimgANews").val(),
            content2: $("#content2BNews").val(),
            content: $("#contentBNews").val(),
            videos: $("#videoANews").val(),
            tag_video: $("#tagANews").val(),
            plateforme: $("#plateforme1ANews").val(),
            plateforme2: $("#plateforme2ANews").val(),
            plateforme3: $("#plateforme3ANews").val(),
            plateforme4: $("#plateforme4ANews").val(),
            plateforme5: $("#plateforme5ANews").val(),
            plateforme6: $("#plateforme6ANews").val(),
            plateforme7: $("#plateforme7ANews").val(),
            plateforme8: $("#plateforme8ANews").val(),
            title_games: $("#titreBNews").val(),
            img_games: $("#imgBNews").val(),
            genre: $("#genreANews").val(),
            date_sortie: $("#dateANews").val()
        },
        type: "POST",
        success: function(data) {

            if (data != 0) {

                div_result.style.display = 'block';
                div_result.style.opacity = "1";
                div_result.style.color = 'rgb(30 169 64)';
                div_result.innerHTML = "<i class='fas fa-check'></i>L'actualité à bien été ajouter !";

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