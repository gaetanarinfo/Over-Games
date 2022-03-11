function checkFormRecover(event) {

    // Définition de nos constantes
    const emailRec = document.getElementById('emailRec').value;
    const cleRec = document.getElementById('cleRec').value;
    const newpassRec = document.getElementById('passRec').value;
    const div_result = document.querySelector('.div-result');
    const regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/;

    event.preventDefault();

    if (!newpassRec.match(regex)) {
        div_result.style = "margin: 19px 19px -5px 19px !important";
        div_result.style.display = 'block';
        div_result.style.opacity = "1";
        div_result.style.color = 'rgb(121 12 12)';
        div_result.innerHTML = '<i class="fas fa-times"></i>Le mot de passe ne respect pas nos conditions !';
        setTimeout(function() {
            div_result.style.transition = "opacity 500ms";
            div_result.style.opacity = "0";
        }, 1500);
        setTimeout(function() {
            div_result.style.display = "none";
        }, 2000);

    } else {

        jQuery.ajax({
            url: "assets/config/pass_recover.php",
            data: { email: $("#emailRec").val(), cle: $("#cleRec").val(), password: $("#passRec").val() },
            type: "POST",
            success: function(data) {

                if (data == 0) {
                    div_result.style = "margin: 19px 19px -5px 19px !important";
                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(121 12 12)';
                    div_result.innerHTML = '<i class="fas fa-times"></i>' + "Vous n'avez pas validé votre compte !";
                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                } else if (data == 1) {
                    div_result.style = "margin: 19px 19px -5px 19px !important";
                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(121 12 12)';
                    div_result.innerHTML = '<i class="fas fa-times"></i>' + "Les champs ne doivent pas être vide !";
                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                } else if (data == 2) {
                    div_result.style = "margin: 19px 19px -5px 19px !important";
                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = 'rgb(121 12 12)';
                    div_result.innerHTML = '<i class="fas fa-times"></i>' + "La clé n'est pas valide !";
                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 1500);
                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 2000);

                } else {
                    div_result.style = "margin: 19px 19px -5px 19px !important";
                    div_result.style.display = 'block';
                    div_result.style.opacity = "1";
                    div_result.style.color = '#12b73b';
                    div_result.innerHTML = '<i class="fas fa-check"></i> Votre mot de passe a été modifié !';

                    setTimeout(function() {
                        div_result.style.transition = "opacity 500ms";
                        div_result.style.opacity = "0";
                    }, 600);

                    setTimeout(function() {
                        div_result.style.display = "none";
                    }, 800);
                }

            },
            error: function() {
                event.preventDefault();
            }
        });
        return false;
    }

}