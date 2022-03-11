function checkFormDelete(event) {

    event.preventDefault()

    // Définition de nos constantes
    const div_result = document.getElementById('div-result6');

    if (clicked == true) {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/remove.php",
            data: {
                email: $("#emailDelete").val()
            },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = "<i class='fas fa-check'></i>Le membre est maintenant supprimé !";

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    setTimeout(function() {
                        document.location.reload();
                    }, 1000);

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

    if (clicked1 == true) {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/ban_membre.php",
            data: {
                email: $("#emailDelete").val()
            },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = "<i class='fas fa-check'></i>Le membre est maintenant bannis !";

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    setTimeout(function() {
                        document.location.reload();
                    }, 1000);

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

    if (clickedremovearticle == true) {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/remove_article.php",
            data: {
                id: $("#articleDelete").val()
            },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = "<i class='fas fa-check'></i>L'article est maintenant supprimé !";

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    setTimeout(function() {
                        document.location.reload();
                    }, 1000);

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

    if (clickedremovetest == true) {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/remove_test.php",
            data: {
                id: $("#testDelete").val()
            },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = "<i class='fas fa-check'></i>Le test est maintenant supprimé !";

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    setTimeout(function() {
                        document.location.reload();
                    }, 1000);

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

    if (clickedremovetuto == true) {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/remove_tuto.php",
            data: {
                id: $("#tutoDelete").val()
            },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = "<i class='fas fa-check'></i>Le tuto est maintenant supprimé !";

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    setTimeout(function() {
                        document.location.reload();
                    }, 1000);

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

    if (clickedremovevideo == true) {
        jQuery.ajax({
            url: "https://gaetan-seigneur.store/admin/assets/config/remove_video.php",
            data: {
                id: $("#videoDelete").val()
            },
            type: "POST",
            success: function(data) {

                if (data != 0) {

                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(30 169 64)';
                    div_result.innerHTML = "<i class='fas fa-check'></i>La vidéo est maintenant supprimé !";

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                    setTimeout(function() {
                        document.location.reload();
                    }, 1000);

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


};